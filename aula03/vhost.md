# Exemplo conf vhost

Criar o vhost dentro de `/etc/apache2/sites-available`

```
<VirtualHost *:80>	
	# Endereco do site
	ServerName blog.com.br
	# Pasta do projeto
	DocumentRoot /var/www/html/501/aula05/projeto/public
	# Configuracoes da pasta
	<Directory /var/www/html/501/aula05/projeto/public>
		Options Indexes FollowSymLinks
		AllowOverride All
		Order allow,deny
		Allow from all
	</Directory>
</VirtualHost>
```

Habilita o Vhost `sudo a2ensite`  

Adiciona no arquivo `/etc/hosts`
```
127.0.0.1	blog.com.br
```

Restarta o apache
```
sudo service apache2 restart
```