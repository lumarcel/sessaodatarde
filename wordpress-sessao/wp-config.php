<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'minicurso');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cmPiO~&[QjyPAPB{b-aB6fq]fP0EbtJ6*/5T5r*MQ mj.x{~T82a:+TM,Pq0a(__');
define('SECURE_AUTH_KEY',  'QA)a7tcvrixOa&O%mdo9Nl3KP:QRZe%+&il<:j^aRWN~(%O`A=Nkgb!(@(ufb.m6');
define('LOGGED_IN_KEY',    'F(lQw}eC[qPoQ3@=aLSf+5_cm_W&L~O#l$DaF6uIhUMe)g+.nZDY/(]M|`Od&*CD');
define('NONCE_KEY',        'd1jvE)?a5=n+0C%Te4 ]V*N!}^$`cNJSQeg^QQr9 {}AZ[oh]tkR[UpFt<>w)8^8');
define('AUTH_SALT',        'O9@rdr1*u|_7#<0)(}G87KJuGR )<Q)yhIVfEYO{x3*pO]YW-{s]aP3t+%N%R!XP');
define('SECURE_AUTH_SALT', 'C,E2#JEQ)Z6L0gI#ujpV#U/7nH0@fL1jqk|7y^xjqm!wq>zKp1mA<8L<_vTFnOQ2');
define('LOGGED_IN_SALT',   'U2Q^/nH~@R%r46SkiD`3j$QYaAgVA| ITkpy$m`!b$iplZl=@(MLSkQ<d!>-rF]j');
define('NONCE_SALT',       'R`90ZhE6kykl+bMQMnh1#_(bmcV>ZChyZ+ ~U@A78}DcJ5%%)XB< cCX?RBPLu==');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
