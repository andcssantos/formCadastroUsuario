<?php

    /* Este é o arquivo responsável pela criação da nossa
     * Database e as tabelas que irei utilizar para a criação
     * do formulário de cadastro do usuário.
     * Todos meus códigos busarei comentar linha por linhas para
     * que também sirva de auxiliar para aquelas que desejam estudar
     * os meus códigos, por mais iniciantes que ainda possam ser.*/


    /* O primeiro passo é criar uma conexão com o banco de dados MySQL
     * para isso vou utilizar uma conexão orientada a objeto, para que
     * possamos utilizar funções mais seguras. Não vou usar PDO, já que
     * este é apenas uma materia lde estudos. */
    $con   =   new mysqli("localhost", "root", NULL);

    /* Crio uma SQL Query String onde irá criar a DATABASE studyweb caso
     * ela ainda não exista e abaixo eu executo a query */
    $dtBase = "studyweb";

    $query = "CREATE DATABASE IF NOT EXISTS $dtBase";
    mysqli_query($con, $query) or die("Oops! Ocorreu um erro ao criar sua Database: ".mysqli_error($con));

    /* Com a Database criada, podemos selecionar ela e inciar a criação
     * das tabelas que irei ultizar. */
    mysqli_select_db($con, $dtBase) or die("Oops! Ocorreu um erro ao selecionar sua Database: ".mysqli_error($con));

    /* Agora podemos criar as nossas tabelas
     * Executamos a Query String responsável por criar a tabela
	 *	usuarios. */
    mysqli_query($con, "CREATE TABLE funcionarios (
        id 				int(11) 		NOT NULL AUTO_INCREMENT PRIMARY KEY,
	    codigo 			char(32) 		NOT NULL,
		nomeCompleto 	varchar(80) 	NOT NULL,
		dtNascimento	date 			NOT NULL,
		genero			char(1) 		NOT NULL,
		estadoCivil	 	varchar(10)		NOT NULL,
		nacionalidade 	varchar(25)		NOT NULL,
		naturalidade 	varchar(25) 	NOT NULL,
		escolaridade	char(7) 		NOT NULL,
		nomePai 		varchar(80) 	NULL,
		nomeMae 		varchar(80) 	NULL,
		telResidencial	char(14)		NULL,
		telCelular		char(15)		NOT NULL,
		docRG			varchar(14) 	NOT NULL, 
		docCPF 			char(14) 		NOT NULL,
		cnhNumero 		char(11) 		NULL,
		cnhCategoria 	varchar(3) 		NULL,
		cnhValidade		date			NULL,
		cnhEmissao		date			NULL,
		ctpsPIS 		char(11) 		NOT NULL,
		ctpsNumero 		char(7) 		NOT NULL,
		ctpsSerie 		char(4) 		NOT NULL,
		ctpsUF 			char(2) 		NOT NULL,			  
		dtAdmissao 		datetime 		NOT NULL,
		dtDemissao 		datetime 		NULL,
		setor 			int(11) 		NOT NULL,
		funcao 			int(11) 		NOT NULL,
		valorSalario 	float(6,2) 		NOT NULL DEFAULT 0.00,
		statusVR 		tinyint(1) 		NOT NULL,
		valorVR 		float(5,2) 		NOT NULL DEFAULT 0.00,
		statusVT 		tinyint(1) 		NOT NULL,
		valorVT 		float(5,2) 		NOT NULL DEFAULT 0.00,
		statusPSaude 	tinyint(1) 		NOT NULL,
		acessoEmail 	char(32) 		NOT NULL,
		acessoSenha 	char(32) 		NOT NULL,
		dtRegistro 		datetime 		NOT NULL,
		dtAcesso 		datetime 		NOT NULL,
		tipoConta 		int(11) 		NOT NULL DEFAULT 0,
		statusConta 	tinyint(1) 		NOT NULL DEFAULT 0,
		observacao		text			NULL
        );
    ") or die("Oops! Ocorreu um erro ao criar a tabela funcionários: ".mysqli_error($con));

    /* Executamos a Query String responsável por criar a tabela
	 * endereco do funcionário. Para que a tabela funcionários não
	 * fique muito grande, separei em uma segunda tabela. */	
    mysqli_query($con, "CREATE TABLE funcendereco (
        id 			int(11) 		NOT NULL AUTO_INCREMENT PRIMARY KEY,
        codFunc 	char(32) 		NOT NULL,
        cep	 		char(9) 		NOT NULL,
        endereco	varchar(80) 	NOT NULL,
        numero	 	varchar(5) 		NOT NULL,
        complemento varchar(15)		NULL,
        bairro 		varchar(30) 	NOT NULL,
        cidade	 	varchar(30) 	NOT NULL,
        uf 			char(2) 		NOT NULL,
        pais 		varchar(30) 	NOT NULL
        );
    ") or die("Oops! Ocorreu um erro ao criar a tabela endereço: ".mysqli_error($con));

    echo "<br>Database criada com sucesso! <br>";
    echo "Tabela funcionarios criada com sucesso! <br>";
    echo "Tabela endereco criada com sucesso!";