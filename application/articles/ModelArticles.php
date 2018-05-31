<?php

namespace application\articles;
use includes\Db;



class ModelArticles {
    
    
    public function articlesJson(){
        $datas = [];
        $articles = $this->articles();
        
        while ($row = $articles['articles']->fetch_array()){
            $datas[] = $row;
        }
        return json_encode($datas);
    }
    
    
    
    public function articles()
    {
        $datas = [];
        $db = Db::connect();

        $results = $db->query( 'SELECT * FROM articles' );

        if( !$db->errno && $results->num_rows > 0 )
        {
            $datas[ 'articles' ] = $results;
        }

        return $datas;
        
    }


    public function article( $id )
    {
        $datas = [];
        $db = Db::connect();

        $results = $db->query( 'SELECT * FROM articles WHERE IdArticle = \''.$db->real_escape_string($id).'\'' );

        if( !$db->errno && $results->num_rows > 0 )
        {
            $datas[ 'article' ] = $results;
        }
        
        return $datas;

    }
}