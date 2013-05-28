
class database {
	$localhosts = ['localhost']
	$hosts = [keys(hiera('hosts')), $localhosts]

	Class['mysql_server']->
	mysql::grant::database { $hosts: }

}

define mysql::grant::database {
	$db_name = hiera('db_name')
	$db_pass = hiera('db_pass')
	mysql::grant { "${db_name} ${name}":
		mysql_privileges	=> 'ALL',
		mysql_password		=> $db_pass,
		mysql_db		=> $db_name,
		mysql_user		=> $db_name,
		mysql_host		=> $name
	}
}
