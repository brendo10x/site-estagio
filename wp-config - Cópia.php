<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'u552338213_br');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'u552338213_br');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'brendotimao7x');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';u}JlqP%[Au*xt*T[m+2zjsUI6XT(;|g (8.c[14T[T,<~|2|!`2st5-4Uz)X v|');
define('SECURE_AUTH_KEY',  '9c,#pkMAvD;,L[I9l%X},.TTgrxZb>^efM7:)~?)QUot^7:$g~p/TxRy1%3E4||*');
define('LOGGED_IN_KEY',    '+(~>8pl&u_rJ7EUz0x+Tm.(]jApfl*#NS1*!f9W|6(rlpkX_^${;q|o1|2[Oj1[e');
define('NONCE_KEY',        '~;@I@vIi4}iFfgw)X]VdM+I87y9x*~ftvG.OA@zK-!AV]cyE)z}%Ti<ZmQL9us(e');
define('AUTH_SALT',        ']<(Y<`o:d xfd+9gXDM8Z#V!!z-iX-L+,o_jp5`3U.JjFYdk2Xp3w+UsHnQ@X08j');
define('SECURE_AUTH_SALT', 'xmh9&iH]t}sa@{2?A)Ra:0}L0KX=w(3VxPa!7}]lxxC`NR19AeG^/Q#x I0-?Gpq');
define('LOGGED_IN_SALT',   ')N|%wbx~ur#U&Wrd~(mzYTAZI/4jU_Tu>+%gH[ 9~Xe2oi]o+8Y!!ml-!D3!^oE{');
define('NONCE_SALT',       'r!8Sm]Y-Y6L+H*3-/mwBIr*+^5dyRL8B!+{;y]8?Qcj)R_<-}/5t[GayV3~k%:!Q');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
