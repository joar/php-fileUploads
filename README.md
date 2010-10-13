# PHP File upload

## Usage example
	$uploads = new fileUploads();
	$uploads->init();
	debug_tools::preint_r( $uploads );
	$uploads->file('file')->move('tmp/file.csv');
	debug_tools::preint_r( $uploads );
	$uploads->file('file')->unlink();
	debug_tools::preint_r( $uploads );
	
### Output
	
	fileUploads Object
	(
	    [uploads:private] => Array
	        (
	            [file] => fileUpload Object
	                (
	                    [base_path:private] => /mounted-storage/home77b/sub006/sc30932-XMAI/electroluxmail.com/converter.electroluxmail.com/
	                    [key:private] => file
	                    [_file:private] => Array
	                        (
	                            [name] => 100609-ELUX-NO-campaign-addresses.csv
	                            [type] => application/octet-stream
	                            [tmp_name] => /shared/upload_tmp/phpuoKocG
	                            [error] => 0
	                            [size] => 246973
	                        )
	
	                    [_history:private] => 
	                )
	
	        )
	
	    [_empty:private] => 
	)
	fileUploads Object
	(
	    [uploads:private] => Array
	        (
	            [file] => fileUpload Object
	                (
	                    [base_path:private] => /mounted-storage/home77b/sub006/sc30932-XMAI/electroluxmail.com/converter.electroluxmail.com/
	                    [key:private] => file
	                    [_file:private] => Array
	                        (
	                            [name] => 100609-ELUX-NO-campaign-addresses.csv
	                            [type] => application/octet-stream
	                            [tmp_name] => /shared/upload_tmp/phpuoKocG
	                            [error] => 0
	                            [size] => 246973
	                            [current_path] => tmp/file.csv
	                        )
	
	                    [_history:private] => Array
	                        (
	                            [0] =>   mv: /shared/upload_tmp/phpuoKocG - tmp/file.csv
	                        )
	
	                )
	
	        )
	
	    [_empty:private] => 
	)
	fileUploads Object
	(
	    [uploads:private] => Array
	        (
	            [file] => fileUpload Object
	                (
	                    [base_path:private] => /mounted-storage/home77b/sub006/sc30932-XMAI/electroluxmail.com/converter.electroluxmail.com/
	                    [key:private] => file
	                    [_file:private] => Array
	                        (
	                            [name] => 100609-ELUX-NO-campaign-addresses.csv
	                            [type] => application/octet-stream
	                            [tmp_name] => /shared/upload_tmp/phpuoKocG
	                            [error] => 0
	                            [size] => 246973
	                            [current_path] => tmp/file.csv
	                        )
	
	                    [_history:private] => Array
	                        (
	                            [0] =>   mv: /shared/upload_tmp/phpuoKocG - tmp/file.csv
	                            [1] =>   rm: tmp/file.csv
	                        )
	
	                )
	
	        )
	
	    [_empty:private] => 
	)