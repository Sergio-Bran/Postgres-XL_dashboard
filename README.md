# Postgres-XL_dashboard

Web based monitoring tool for Postgres-XL cluster, to check the health and transactions againts the cluster. Based on https://github.com/javelinorg/Postgres_XL_Dashboard repository,
adapted for Postgres-XL 10r1 version.

Supported monitored elements:

```
GTM Master/Slave
GTM_proxies
Coordinators
Datanode masters/slave
```

## Prerequisites
```
* Web server (Apache NGINX)
* PHP 7.2
```

## Procedure
Clone and copy the repository into the /var/www/html directory and configured the new instance in your web server. 
Modify the configuration file: include_config.php on the $arrDBConns array variable with the node information, like the following example:

```
* DBType' => 'Postgres'
* DBVersion' => '10.1xl'
* DBXLNode' => 'Coordinator'
* DBIP' => '192.168.100.73'
* DBPort' => 20004
* DBName' => 'database_name'
* DBUser' => 'username'
* DBPass' => 'password'
```

