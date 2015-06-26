<?php
// Created by Halsey Takang (skinofblackpikin)

include '../shared/default.php';
   $siteName = "SkinOfBlackpikin"
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $siteName ?> - Home</title>
         <?php loadScripts()?>
    </head>
<body>     
    <?php createHeader();?>
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <div id="tutorials" class="div_present_text">
                <div><?php echo "Tutorials" ?></div>
                You can use either of these methods to specify the media for entire blocks of styles, and create
                multiple media blocks within the same style block. However, it is generally easier to create
                groups of media-specific styles in external files and use the link element to link each into your
                document. This technique is outlined in the next section.
                <input type="button"  class="btn_style_sobp" value="Read more..."/>
            </div>
            <div id="lectures" class="div_present_text">
                <div><?php echo "Lectures" ?></div>
                You can use either of these methods to specify the media for entire blocks of styles, and create
                multiple media blocks within the same style block. However, it is generally easier to create
                groups of media-specific styles in external files and use the link element to link each into your
                document. This technique is outlined in the next section.
                <input type="button" class="btn_style_sobp" value="Read more..."/>
            </div>
            <div id="photos" class="div_present_text">
                <div><?php echo "Photos" ?></div>
                You can use either of these methods to specify the media for entire blocks of styles, and create
                multiple media blocks within the same style block. However, it is generally easier to create
                groups of media-specific styles in external files and use the link element to link each into your
                document. This technique is outlined in the next section.
                <input type="button" class="btn_style_sobp" value="Read more..."/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div id="business" class="div_present_text">
                <div><?php echo "Business" ?></div>
                You can use either of these methods to specify the media for entire blocks of styles, and create
                multiple media blocks within the same style block. However, it is generally easier to create
                groups of media-specific styles in external files and use the link element to link each into your
                document. This technique is outlined in the next section.
                <input type="button" class="btn_style_sobp" value="Read more..."/>
            </div>
            <div id="software" class="div_present_text">
                <div><?php echo "Software" ?></div>
                You can use either of these methods to specify the media for entire blocks of styles, and create
                multiple media blocks within the same style block. However, it is generally easier to create
                groups of media-specific styles in external files and use the link element to link each into your
                document. This technique is outlined in the next section.
                <input type="button" class="btn_style_sobp" value="Read more..."/>
            </div>
            <div id="music" class="div_present_text">
                <div><?php echo "Music" ?></div>
                You can use either of these methods to specify the media for entire blocks of styles, and create
                multiple media blocks within the same style block. However, it is generally easier to create
                groups of media-specific styles in external files and use the link element to link each into your
                document. This technique is outlined in the next section.
                <input type="button" class="btn_style_sobp" value="Read more..."/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div id="novels" class="div_present_text">
                <div><?php echo "Novels" ?></div>
                You can use either of these methods to specify the media for entire blocks of styles, and create
                multiple media blocks within the same style block. However, it is generally easier to create
                groups of media-specific styles in external files and use the link element to link each into your
                document. This technique is outlined in the next section.
                <input type="button" class="btn_style_sobp" value="Read more..."/>
            </div>
            <div id="careers" class="div_present_text">
                <div><?php echo "Careers" ?></div>
                You can use either of these methods to specify the media for entire blocks of styles, and create
                multiple media blocks within the same style block. However, it is generally easier to create
                groups of media-specific styles in external files and use the link element to link each into your
                document. This technique is outlined in the next section.
                <input type="button" class="btn_style_sobp" value="Read more..."/>
            </div>
        </div>
    </div>
    
    <?php createFooter(); ?>
</body>
</html>


