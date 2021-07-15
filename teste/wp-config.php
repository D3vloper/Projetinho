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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'teste' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'k(kX(%z=J!.&?4YpvA@6bhdF[s&q2y+iQ.>x26f?s:*]D!S4sORSUv=|Df351`sp' );
define( 'SECURE_AUTH_KEY',  'K*i^Ozmn8D_FCd+T[;^JiXD`ym[>$%<;@u/, 9X,c 9Jre81?6f&q@K!kENOe*V}' );
define( 'LOGGED_IN_KEY',    'LQ5D(W:|5bV.ZpTSC/j*|;tol`?v%TFr#E[(1bCGx`b<J:*2C@I=M*4HO}4]Mm~3' );
define( 'NONCE_KEY',        'p!]A;, d%}t}CH|u;]wsoAV9 1:`|~8Jrr|k(vnJ`x@v;rcoPrU[R6y{Eg<n+}P0' );
define( 'AUTH_SALT',        ',EMTrrrB>x8==f:q49Nk~2e.y&)7c}nHCzT:VlIh/m?NaCz2?{%nvHy4M?p6[)I)' );
define( 'SECURE_AUTH_SALT', 'O@xX%.Rx69:y*!`7mXPtr]swv]awInhr uTHz|:@W}j0o`xx=[jr$XoK109Ka~;0' );
define( 'LOGGED_IN_SALT',   'K_a?ST~N?H|: {uq-wAIHKSQh6]l~9}Z=M6k(=1RhA_CbhKQ?U)3FB>Kj?+#Pw?Q' );
define( 'NONCE_SALT',       '_!/VFlw;p5[tA::oDH12UNBcl66d+pw0v[><Ww!0UzhiZW:d]G&, ,$U;3s3Jj[{' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
