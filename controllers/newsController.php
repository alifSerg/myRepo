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
}
?>