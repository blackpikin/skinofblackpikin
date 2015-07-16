<?php ?>
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <div id="tutorials" class="div_present_text">
                <div><?php echo $topics[0]['Home']['title']; ?></div>
                <span>
                    <?php echo $topics[0]['Home']['long_content'] ?>
                    <a class="btn btn_style_sobp" href="<?php echo $this->Html->url(array('controller' => 'home', 'action'=> 'readArticle', $topics[0]['Home']['idhome'])) ?>">Read more...</a>
                </span>
            </div>
            <div id="lectures" class="div_present_text">
                <div><?php echo $topics[1]['Home']['title'] ?></div>
                <span>
                    <?php echo $topics[1]['Home']['long_content'] ?>
                    <a class="btn btn_style_sobp" href="<?php echo $this->Html->url(array('controller' => 'home', 'action'=> 'readArticle', $topics[1]['Home']['idhome'])) ?>">Read more...</a>
                </span>
            </div>
            <div id="photos" class="div_present_text">
                <div><?php echo $topics[2]['Home']['title'] ?></div>
                <span>
                    <?php echo $topics[2]['Home']['long_content'] ?>
                   <a class="btn btn_style_sobp" href="<?php echo $this->Html->url(array('controller' => 'home', 'action'=> 'readArticle', $topics[2]['Home']['idhome'])) ?>">Read more...</a>
                </span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div id="business" class="div_present_text">
                <div><?php echo $topics[3]['Home']['title'] ?></div>
                <span>
                    <?php echo $topics[3]['Home']['long_content'] ?>
                    <a class="btn btn_style_sobp" href="<?php echo $this->Html->url(array('controller' => 'home', 'action'=> 'readArticle', $topics[3]['Home']['idhome'])) ?>">Read more...</a>
                </span>
            </div>
            <div id="software" class="div_present_text">
                <div><?php echo $topics[4]['Home']['title'] ?></div>
                <span>
                    <?php echo $topics[4]['Home']['long_content'] ?>
                    <a class="btn btn_style_sobp" href="<?php echo $this->Html->url(array('controller' => 'home', 'action'=> 'readArticle', $topics[4]['Home']['idhome'])) ?>">Read more...</a>
                </span>
            </div>
            <div id="music" class="div_present_text">
                <div><?php echo $topics[5]['Home']['title'] ?></div>
                <span>
                    <?php echo $topics[5]['Home']['long_content'] ?>
                    <a class="btn btn_style_sobp" href="<?php echo $this->Html->url(array('controller' => 'home', 'action'=> 'readArticle', $topics[5]['Home']['idhome'])) ?>">Read more...</a>
                </span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div id="novels" class="div_present_text">
                <div><?php echo $topics[6]['Home']['title'] ?></div>
                <span>
                    <?php echo $topics[6]['Home']['long_content'] ?>
                    <a class="btn btn_style_sobp" href="<?php echo $this->Html->url(array('controller' => 'home', 'action'=> 'readArticle', $topics[6]['Home']['idhome'])) ?>">Read more...</a>
                </span>
            </div>
            <div id="careers" class="div_present_text">
                <div><?php echo $topics[7]['Home']['title'] ?></div>
                <span>
                    <?php echo $topics[7]['Home']['long_content'] ?>
                    <a class="btn btn_style_sobp" href="<?php echo $this->Html->url(array('controller' => 'home', 'action'=> 'readArticle', $topics[7]['Home']['idhome'])) ?>">Read more...</a>
                </span>
            </div>
        </div>
    </div>
<?php 
  
  