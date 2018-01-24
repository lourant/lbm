<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
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
define('DB_NAME', 'bandarad_dblba');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'bandarad_lba');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '22Manuela06');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=a2!r+?*i?rFR+%eVGriJ{9|-l}w.5mk{#BaFuE1JD<n+Ds?_^8H$63W+N BK:}.');
define('SECURE_AUTH_KEY',  '-6d]rE@Bm@%pTKvIU-m3-.RO_cka|u6o^L|kV8S=<M(K$mH#x%hVClLdpC8}Z: &');
define('LOGGED_IN_KEY',    '8,>QN9^7O7d@U~]3)y{pVpphp%:{j |OJfY_y{r$J357}+s[>?S=57R-x9=Jz?|M');
define('NONCE_KEY',        '9FA-x_C9G`o,g>6g8ynW>j*4-fu7<<R|uDL$1YGV?$Ah@.zv_X+0>f=m9$4.s[{+');
define('AUTH_SALT',        't3 lk(&_5rNsr+X`%o(4t6.Y+_m&$Hsdvy)u:3Yu>{SPEjCZ^7ESbm[SL;xy_7p`');
define('SECURE_AUTH_SALT', '#GnArTmv[ZlU=];ECvG9Q70Y23/-{P.KM-L]/RbIsFcr#7)D&M phYdPMyVH,9^W');
define('LOGGED_IN_SALT',   '-jy(1I,1X(a$R*UkftO|}LHM1-#a`{a]Ly{,}t*~8+L%Vo!4MPp~t{,5)1r$i^z<');
define('NONCE_SALT',       'amnL1oaG+G|)<J8G1_x2 5GzegjHQ(Ghe9h+z=N>Cu|HU`Wmzev]^p<poh/B@>T(\'');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'ml_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
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
