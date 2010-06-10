# PHP File upload

## Usage example

	tools::preint_r( $uploads );
	$uploads->file('file')->move('tmp/file.csv');
	tools::preint_r( $uploads );
	$uploads->file('file')->unlink();
	tools::preint_r( $uploads );
	
### Output
	
	file_uploads Object
	(
	    [uploads:private] => Array
	        (
	            [file] => file_upload Object
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
	file_uploads Object
	(
	    [uploads:private] => Array
	        (
	            [file] => file_upload Object
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
	file_uploads Object
	(
	    [uploads:private] => Array
	        (
	            [file] => file_upload Object
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