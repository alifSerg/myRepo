<?php
class NewsController {
    public function actionIndex() {
        echo "Список новостей";
        return true;
    }

    public function actionView() {
        echo "просмотр одной новости"
        return true;
    }
    public function actionView($category, $id) {
        echo "<br>".$params[0];
        echo "<br>".$params[1];
        echo "<br>".$params[2];
        return true;

    }
}
?>