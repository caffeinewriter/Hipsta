<?PHP
class Config {
	public $blogname = "Blog";
	public $tagline = "Not a Wordpress Blog";
}

$config = new Config

function showHeader() {
	echo '<head>';
	echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>'; 
	echo '<script type="text/javascript" src="http://balupton.github.com/jquery-syntaxhighlighter/scripts/jquery.syntaxhighlighter.min.js"></script>'; 
	echo '<script type="text/javascript">$.SyntaxHighlighter.init();</script>';
	echo '</head>';
}

function showPost() {
	echo Markdown(file_get_contents("/posts/".$_GET['post'].".md"));
}

function showPage() {
	echo Markdown(file_get_contents("/pages/".$GET['page'].".md"));
}

function showFooter() {
	echo "&copy; ".$config->blogname;
}

function showIndex() {
	echo 'Welcome to '.$config->blogname.'!';
}