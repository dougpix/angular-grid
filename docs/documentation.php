<?php
$key = "index";
$pageTitle = "Angular Grid Documentation";
$pageDescription = "Introduction page of documentation for Angular Grid";
$pageKeyboards = "AngularJS Angular Grid Documentation";
include 'documentation_header.php';
?>

<div style="border: 1px solid darkgrey; background-color: #eee; padding: 10px; margin: 30px 5px 5px 5px;">

    <div style="font-size: 20px; font-weight: bold; text-align: center; text-decoration: underline;">
        Value Getters, Context, Expressions and Gulp
    </div>

    <p>
        20th April 2015
    </p>
    <p>
        <b>Value Getters</b> separate the 'getting' of the value from 'rendering' of the value. So you can have one
        renderer (eg currency renderer) and then many ways to get the value (direct from attribute, or adding two
        attributes together). See documentation section on Value Getters.
    </p>
    <p>
        <b>Context</b> allows passing client specific information into your renderers. See the documentation section
        on Context.
    </p>
    <p>
        <b>Expressions</b> allows expression to be used to calculated values and classes. See the documentation sections
        on Cell Styling (for using Class Rules) and Value Getters (for using expressions to evaluate values).
    </p>
    <p>
        <b>Gulp</b> is now used to build the project. Thank you <b>Tanner Linsley</b> for implementing the Gulp build :)
    </p>
    <p>
        <b>Note: </b> having moved to Gulp (and away from RequireJS) CSS files are no longer included in the angularGrid.js
        file. You will need to include Angular Grid CSS files sepecifically.
    </p>
    <p>
        Please tell anyone you might know who would benefit from Angular Grid.
    </p>
    <a href="https://twitter.com/angularGrid" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @angularGrid</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>

<div style="padding: 20px; margin: 5px;">

    <div style="text-align: center; font-weight: bold;">

        <div style="display: inline-block; width: 40%;">
            Star or Watch <br/>
                <iframe src="https://ghbtns.com/github-btn.html?user=ceolter&repo=angular-grid&type=star&count=true&size=large"
                        frameborder="0" scrolling="0" width="160px" height="30px">
                </iframe>
                <iframe src="https://ghbtns.com/github-btn.html?user=ceolter&repo=angular-grid&type=watch&count=true&size=large&v=2"
                        frameborder="0" scrolling="0" width="160px" height="30px">
                </iframe>
        </div>

        <div style="display: inline-block; vertical-align: top; width: 25%;">
            Say You Use <br/>
                <a href="http://ngmodules.org/modules/angular-grid" style="color: black; border: 1px solid darkgrey; background-color: lightgrey; padding: 2px;">
                    A<span style="color: darkred">ng</span>ular Modules
                </a>
        </div>

        <div style="display: inline-block; vertical-align: top; width: 30%;">

            Tell Friends<br/>

                <a class='share-link' href="https://www.facebook.com/sharer/sharer.php?u=www.angulargrid.com">
                    <img src="/images/facebook_32.png" alt="Share on Facebook" title="Share on Facebook"/>
                </a>

                <a class='share-link' href="https://twitter.com/home?status=Check%20out%20AngularGrid,%20a%20new%20way%20to%20show%20grid%20data%20for%20AngularJS">
                    <img src="/images/twitter_32.png" alt="Share on Twitter" title="Share on Twitter"/>
                </a>

                <a class='share-link' href="https://plus.google.com/share?url=www.angulargrid.com">
                    <img src="/images/googleplus_32.png" alt="Share on Google Plus" title="Share on Google Plus"/>
                </a>

                <a class='share-link' href="https://www.linkedin.com/shareArticle?mini=true&url=www.angulargrid.com&title=Angular%20Grid&summary=A%20new%20way%20to%20show%20grid%20data%20for%20AngularJS&source=">
                    <img src="/images/linkedin_32.png" alt="Share on LinkedIn" title="Share on LinkedIn"/>
                </a>

        </div>
    </div>

</div>

<div style="padding: 20px;">

    <h3>
        News
    </h3>

    <hr/>

    <p>
        <b>Next on my list</b> - Sleep. Take it easy. I have hardly left my laptop for two weeks!!!
    </p>

    <hr/>

    <p>
        <b>20 April</b> - Value Getters, Context and Expressions. Will be available in 1.3, or take latest.
        All documented in relevant sections.
    </p>

    <hr/>

    <p>
        <b>18 April</b> - Gulp! Thank you Tanner Linsley for implementing Gulp.
    </p>

    <hr/>

    <p>
        <b>16 April</b> - Checked in column opening & closing column Groups. Now you can show and hide columns in groups.
        Will be available in 1.3, or take latest. Documentation page 'Grouping Headers' updated.
    </p>

    <hr/>

    <p>
        <b>13 April</b> - Checked in 'tab navigation for editing', so when you hit tab while editing a cell, it goes into
        editing the next cell. Will be available in 1.3, or take latest.
    </p>

    <hr/>

    <p>
        <b>12 April</b> - Checked in datasources, pagination, virtual paging, infinite scrolling. Will be available in 1.3, or take latest. Documentation
        pages 'Datasource', 'Pagination' and 'Virtual Paging' created.
    </p>

    <hr/>

    <p>
        <b>09 April</b> - Checked in support for 'Refresh Aggregate Data'. Will be available in 1.3, or take latest. Documentation
        page 'Grouping and Aggregating Rows' updated.
    </p>

    <hr/>

    <p>
        <b>06 April</b> - Checked in support for 'Loading Panel' to show when fetching data. Will be available in 1.3, or take latest. Documentation
        page for loading created.
    </p>

    <hr/>

    <p>
        <b>05 April</b> - Checked in support for custom icons in the headers. Will be available in 1.3, or take latest. Documentation
        page for icons created.
    </p>

    <hr/>

    <p>
        <b>04 April</b> - Checked in support for footers while grouping. Will be available in 1.3, or take latest. Documentation
        for grouping and example in 'test drive' updated to show.
    </p>

    <hr/>

    <p>
        <b>31 March</b> - DailyJS covers launch of Angular Grid.
    </p>

</div>

<?php include 'documentation_footer.php';?>
