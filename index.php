<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Text Editor</title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
                integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>

        <!--css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="css/page.css" rel="stylesheet" type="text/css"/>
        <link href="css/toolbar.css" rel="stylesheet" type="text/css"/>
        <!--css -->

    </head>
    <body>

        <div class="clearfix row toolbar">


            <div class="container-fluid">
                <div class="col-12">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-file"></i>
                        </div>

                        <div class="col-1">
                            <select id="pageSize" onchange="pageSizeChange(this.value)" class="custom-select">
                                <option value="A4">A4</option>
                                <option value="A3">A3</option>
                                <option value="A5">A5</option>
                            </select>
                        </div>

                        <div class="col-1">
                            <select id="pageLayout" onchange="pageLayoutChange(this.value)" class="custom-select">
                                <option value="landscape">Landscape</option>
                                <option value="portrait">Portrait</option>
                            </select>
                        </div>

                        <div class="col-1">
                            <select id="textStyles" onchange="textStylesChange(this.value)" class="custom-select">
                                <option value="p">Normal Text</option>
                                <option value="h1">Title</option>
                                <option value="small">Subtitle</option>
                                <option value="h1">Headding 1</option>
                                <option value="h2">Headding 2</option>
                                <option value="h3">Headding 3</option>
                            </select>
                        </div>
                        
                        <div class="col-1">
                            <select id="textStyles" onchange="textSizeChange(this.value)" class="custom-select">
                                <option value="22">22</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <page size="A4" contenteditable="true" id="page">

    </page>
</body>
        <!-- js-->
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.selection.js" type="text/javascript"></script>
        <script src="js/page.js" type="text/javascript"></script>
        <script src="js/index.js" type="text/javascript"></script>
        <script src="js/text.js" type="text/javascript"></script>

        <!-- js-->
</html>
