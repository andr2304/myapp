<?php

namespace app\modules\admin\controllers;

use app\modules\admin\forms\WordForm;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use Yii;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class GenerationController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new WordForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $post = Yii::$app->request->post("WordForm");
            $phpWord = new PhpWord();
            $section = $phpWord->addSection();
            $section->addText($post['body']);

            $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
            header("Content-Disposition: attachment; filename=".$post['name'].'.docx');
            $objWriter->save("php://output");

        } else {
            return $this->render('word', [
                'model' => $model,
            ]);
        }
    }
    public function actionUploadRules()
    {
        return $this->render('rules');
    }
}
