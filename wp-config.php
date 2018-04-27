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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/C+BSI9yFgxPgU|0z>{r8-XMc5BrJb61w>1OBi+R8&j]b{Y|eOdWC*db@O5nE3;<');
define('SECURE_AUTH_KEY',  'HH_IJR`vFsT}gAVzN7L/R]wz*Q.zS59FLtKTIc$4xPc+>b FqwX1ncfnhXMG,KO}');
define('LOGGED_IN_KEY',    'c dU8)btZLLx3-&4]F];_fDPl&6VUauOfehWNecVRLNd|}x+Ruc*,%yW!PNR(D)i');
define('NONCE_KEY',        'jHx)o9y@h8}TMIH`E!mu0;/$J8qSCsG2(~#:8)uu B5~]vVKZKFmd,!zlIvj:<=;');
define('AUTH_SALT',        '2.urU?3@3 D}D+E~t_q~VFeIP+8{<(-a?0XOSbC{=.%S]/pPC=8lD+!UOGFuqRM+');
define('SECURE_AUTH_SALT', 'G5PvQC;U1zv^]fT#Ob[&?(9?0TgM4QUMd(bm[WA<vc8IxI5wd%GNnkuh9qZdk^Y_');
define('LOGGED_IN_SALT',   '$DkbR2|W}Q 9q[ b;`hHWn*L[l<GN<Y-^Z5=kf:rAC/,jblq)@+Tlkn%_Z&(u1EG');
define('NONCE_SALT',       'V@_XDCnuQgu1yKjwlqnoWxFE(h4[s6|d|c7d+@jHGQPx<@uZl8V[pGS#z~rY[*|I');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
