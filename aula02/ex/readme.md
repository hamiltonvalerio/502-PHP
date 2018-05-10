# Exercicios Arquivos

## Importar CSV para banco de dados

- Gerar um csv no site http://www.theonegenerator.com/pt
- Importar os dados deste csv para um banco de dados
- Caso não tenha um banco de dados, crie-o
- Pelo menos 1 tabela com 4 campos

Limpando os dados para importação
```
$dado = trim(stripslashes($dado));
```

## Exportar dados para csv

- Ler as informações do banco
- Gerar csv dos dados.


### Banco de dados
#### Instalando Postgres
```
sudo apt update && sudo apt install postgresql
```
Logar e Criar uma base de dados e um usuario nosso
```
sudo su
su postgres
psql
CREATE DATABASE aula;
CREATE USER lucas PASSWORD '123';
ALTER DATABASE aula OWNER TO lucas;
\q
exit
exit
```
Logando com nosso usuário
```
psql -h localhost -U lucas -d aula
```
Criando tabela
```
CREATE TABLE users(
	id SERIAL PRIMARY KEY,
	name VARCHAR(200) NOT NULL,
	email VARCHAR(150) NOT NULL UNIQUE,
	pass VARCHAR(200) NOT NULL
);
```
#### Instalando Mysql
Logar e Criar uma base de dados e um usuario nosso
```
sudo su
mysql
CREATE DATABASE aula;
CREATE USER 'lucas'@'localhost' IDENTIFIED BY '@da4linux';
GRANT ALL PRIVILEGES ON aula.* TO 'lucas'@'localhost';
exit
exit
```
Logando com nosso usuário
```
mysql -h localhost -b aula -u lucas -p
```
Criando tabela
```
CREATE TABLE users(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(200) NOT NULL,
	email VARCHAR(150) NOT NULL UNIQUE,
	pass VARCHAR(200) NOT NULL
);
```
### Php
Instalando plugins
```
sudo apt install php7.0-pgsql
sudo apt install php7.0-mysql
sudo service apache2 restart
```