<?php

require 'src/session.php';
function bookmarksLoad() :array {

    sessionStart();
    
    if ( !empty($_SESSION['bookmark']) ) {

        return explode(',', $_SESSION['bookmark']);

    }

    return [];
 
}

function bookmarksSave(array $bookmarks) : void {

    sessionStart();

    $_SESSION['bookmark'] = implode(',', $bookmarks);    

}

function bookmarkToggle(int $id) : void {

    $bookmarks = bookmarksLoad();

    if (in_array($id, $bookmarks)) {

        unset($bookmarks[array_search($id, $bookmarks)]);

    } else  {

        $bookmarks[] = $id;
    
    }

    bookmarksSave($bookmarks);

}