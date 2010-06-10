<?php
	class tools {
		public static function preint_r( $data ) {
			foreach ( func_get_args() as $val ) {
				echo '<pre>';
				echo print_r( $val, true );
				echo '</pre>';
			}
		}
	}
	class file_uploads {
		private $uploads;
		private $_empty;
		
		public function file( $key ) {
			return $this->uploads[ $key ];
		}
		public function _empty() {
			return $this->_empty;
		}
		public function init() {
			$backtrace = debug_backtrace();
			rsort( $backtrace );
			$base_path = preg_replace('#(/)([^/]+)$#', '$1', $backtrace[0]['file'] );
			foreach ( $_FILES as $key => $val ) {
				$this->uploads[ $key ] = new file_upload( $key, $base_path );
			}
			if ( ! count( $_FILES ) ) {
				$this->_empty = true;
			} else {
				$this->_empty = false;
			}
		}
	}
	class file_upload {
		private $base_path;
		private $key;
		private $_file;
		private $_history;
		
		public function __construct( $key, $base_path = false ) {
			if ( false === $base_path ) {
				$base_path = $_SERVER['DOCUMENT_ROOT'];
			}
			$this->base_path = $base_path;
			$this->key = $key;
			$this->_file = &$_FILES[ $key ];
		}
		
		public function get_path() {
			if ( ! empty( $this->_file['current_path'] ) ) {
				return $this->_file['current_path'];
			} else {
				return $this->_file['tmp_name'];
			}
		}
		
		public function move( $path ) {
			$location_new = $base_path . $path;
			$location_old = $this->get_path();
			
			if ( empty( $this->_file['current_path'] ) ) {
				if ( ! move_uploaded_file( $location_old, $location_new ) ) {
					throw new Exception('Could not move file ' . $location_old . ' to ' . $location_new );
				} else {
					$this->_file['current_path'] = $location_new;
				}
				$this->h('mv', $location_old . ' - ' . $location_new );
			} else {
				if ( ! copy( location_old, $location_new ) ) {
					throw new Exception('Could not move ' . $location_old . ' to ' . $location_new );
				}
				if ( ! unlink( $location_old ) ) {
					throw new Exception('Could not unlink() ' . $location_old );
				}
				$this->h('cp', $location_old . ' - ' . $location_new );
				$this->h('rm', $location_old );
				$this->_file['current_location'] = $location_new;
			}
		}
		public function unlink() {
			$path = $this->get_path();
			if ( ! unlink( $path ) ) {
				throw new Exception('Could not remove file: ' . $path );
			}
			$this->h('rm', $path );
		}
		# Event recorder
		public function h( $type, $text ) {
			$this->_history[] = sprintf('%1$4s: ', $type ) . $text;
		}
	}
	$uploads = new file_uploads();
	$uploads->init();