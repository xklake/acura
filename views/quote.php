<?php
use yii\helpers\Html;

$service = ['Certified Translation', 'Document Translation','Transcription ', 'Proofreading and Editing', 'Interpretation'];
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 2:18 PM
 */
?>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">FREE ONLINE QUOTATION</h2>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div>
                    <?php  
                        $quote_intro = Yii::$app->getTextBlock( 'quote-intro');
                        if($quote_intro != null)
                        {
                            echo($quote_intro->content);
                        }
                    ?>
                </div>
                
                <?php 
                    $quote_desc = Yii::$app->getTextBlock('quote_desc');
                    if($quote_desc != null){
                ?>
                    <br/>
                    <div>
                        <strong><?=$quote_desc->content?></strong>
                    </div>
                    <?php } ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <?php $form = yii\widgets\ActiveForm::begin(['id' => 'quote-form', 'options' => ['class'=> 'uk-panel uk-panel-box uk-form']]); ?>
                    <h3>Quotation Form</h3>

                    <!--div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Name</label>
                        <div class="col-10">
                            <?= Html::activeTextInput($model, 'name', ['class' => 'form-control', 'placeholder' => "Name(*)"]) ?>
                        </div>
                    </div-->
                    
                    <div class="uk-form-row">
                        Name:<?= Html::activeTextInput($model, 'name', ['class' => 'form-control', 'placeholder' => "Name(*)"]) ?>
                    </div>
                    <br/>
                    <div class="uk-form-row">
                        Email:<?= Html::activeTextInput($model, 'email', ['class' => 'form-control', 'placeholder' => "Email(*)"]) ?>
                    </div>
                    <br/>
               
                    <div class="uk-form-row">
                        Source Language:
                        <?= Html::activeTextInput($model, 'from', ['class' => 'form-control', 'placeholder' => "Source Language"]) ?>
                    </div>
                    <br/>
                    
                    <div class="uk-form-row">
                        Target Language:
                        <?= Html::activeTextInput($model, 'to', ['class' => 'form-control', 'placeholder' => "Target Language"]) ?>
                    </div>
                    <br/>
                    
                    <div class="uk-form-row">
                        Service:
                        <?= Html::activeDropDownList($model, 'serivce', $service,['class' => 'form-control']) ?>
                    </div>
                    <br/>
                    
                    <div class="uk-form-row">
                        Delivery Date(YYYY-MM-DD):
                        <?= Html::activeTextInput($model, 'deliverydate', ['class' => 'form-control', 'placeholder' => "Delivery Date"]) ?>
                    </div>
                    <br/>

                    <div class="uk-form-row">
                        File (Please attach the document to be translated, or a sample of the document plus the estimated word count for the project)
                        <?= Html::activeFileInput($model, 'attachment', ['class' => 'form-control']) ?>
                    </div>
                    <br/>

                    <div class="uk-form-row">
                        Describe Request:
                        <?= Html::activeTextarea($model, 'body', ['class' => 'form-control', 'placeholder' => "Describe Request", 'rows'=>5]) ?>
                    </div>
                    <br/>
                   
                    <div class="uk-form-row">
                        <?= Html::submitButton( Yii::t('app', 'Submit Quotation Request'), ['class' => 'btn btn-primary', 'name' => 'quote-button']) ?>
                    </div>
                <?php yii\widgets\ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>
