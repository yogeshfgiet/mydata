    <?php

include("config.php");// Connection to database
     
    if($_POST) {
    $page = $_POST['page']; // Current page number
    $per_page = $_POST['per_page']; // Articles per page
    if ($page != 1) $start = ($page-1) * $per_page;
    else $start=0;
    $select = $bdd->query('SELECT *  FROM user LIMIT '.$start.', '.$per_page.''); // Select article list from $start
    $select->setFetchMode(PDO::FETCH_OBJ);
    $numArticles = $bdd->query('SELECT count(id) FROM user')->fetch(PDO::FETCH_NUM); // Total number of articles in the database
    $numPage = ceil($numArticles[0] / $per_page); // Total number of page
    // We build the article list
    $articleList = '';
    while( $result = $select->fetch() ) {
    $articleList .= '<div class="well well-sm">' . $result->id . '. <b>' . $result->name . '</b><p>' . $result->email . '</p></div>';
    }
    // We send back the total number of page and the article list
    $dataBack = array('numPage' => $numPage, 'articleList' => $articleList);
    $dataBack = json_encode($dataBack);
    echo $dataBack;
    }
    ?>
