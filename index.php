<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->
    <title>Frontend Wizard</title>
    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="css/prettify.css" rel="stylesheet">	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="css/styles.css" media="all" />
	<style>
		html, body {
			width: 100%;
			height: 100%;
		}
		.form-group{
			margin-top: 15px;
		}
	</style>
	<link rel="stylesheet" href="css/dropzone.css" media="all" />
  </head>
  <body>    
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-topz">
      <div class="container">
        <div class="navbar-header"></div>
        <div id="navbar" class="navbar-collapse collapse"></div>
      </div>
    </nav>
	<div style="height: 96%">	
		<div class="container-fluid" style="height: inherit">
			<div class="row" style="height: inherit">
				<div class="col-md-6" style="height: inherit">
					<div style="width: 100%;height: 100%;text-align: left;background: rgba(59, 59, 78, 0.14)">
						<div id="zsg-vp-wrap" style="height:inherit;overflow: auto;">
							<div id="sg-cover"></div>
							<div id="sg-gen-container">					
								<div id="sg-viewport">
									<div id="dvviewport" style="position: relative;top: 50%;transform: translate(-15%,-60%);transform: translateY(-50%);">
										<img id="imgviewport" style="width:100%" src="img/img.png"/>
										<div id="dvcircle" style="position:absolute;cursor: -webkit-grab;">
											<img src="img/circle.png" style="width: 130px;" />
										</div>	
									</div>															
								</div>								
								<div id="sg-rightpull-container" style="position: relative;top: 50%;transform: translateY(-50%);">
									<div id="sg-rightpull"></div>
								</div>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-md-6" style="height: inherit;">
					<div id="rootwizard" class="tabbable tabs-left" style="height:100%">
						<ul>
							<li><a href="#tab1" data-toggle="tab">Base Data</a></li>
							<li><a href="#tab2" data-toggle="tab">Overlay Data</a></li>
							<li><a href="#tab3" data-toggle="tab">Upload</a></li>					
						</ul>
						<div class="tab-content" style="height:100%">
							<div class="tab-pane" id="tab1" style="height:87%">
								<div class="form-group"> 
									<label for="exampleInputEmail1">Select Image</label>
									<div id="dropzone" class="dropzone needsclick zsdz-started"></div>											
								</div>																
								<div class="form-group"> 
									<label for="exampleInputEmail1">Display Resolution</label> 
									<input type="text" class="form-control sg-size-px" placeholder="" style="width: 60px;display:initial;"> px /
									<input type="text" class="form-control sg-size-em" placeholder="" style="width: 60px;display:initial;"> em 							
								</div>	
								<div class="form-group">
									<label for="exampleInputEmail1">Image Resolution  &nbsp;</label> 
									<input type="text" class="form-control img-size-width" style="width: 60px;display:initial;"> px / 
									<input type="text" class="form-control img-size-height" style="width: 60px;display:initial;"> px	
								</div>															
							</div>
							<div class="tab-pane" id="tab2">
								<div>	
									Select size
									<select>
										<option>50%</option>
										<option>100%</option>
										<option>200%</option>
									</select>								
								</div>
								<div>Little image preloaded(circle of constant size) on overlay</div>
								<div>Allow position of circle over image</div>
							</div>
							<div class="tab-pane" id="tab3">
								<div>Email of the user with regex for basic checks</div>
								<div>Bottom "Complete"</div>
							</div>						
							<ul class="pager wizard">
								<li class="previous first" style="display:none;"><a href="#">First</a></li>
								<li class="previous"><a href="#">Previous</a></li>
								<li class="next last" style="display:none;"><a href="#">Last</a></li>
								<li class="next"><a href="#">Next</a></li>
							</ul>
						</div>
					</div>						
				</div>
			</div>
		</div>
    </div>		
	<footer>
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-bottom">
		  <div class="container">
			<div class="navbar-header"></div>
			<div id="navbar" class="navbar-collapse collapse"></div>
		  </div>
		</nav>	
	</footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>	
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>	
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="js/jquery.bootstrap.wizard.js"></script>
	<script type="text/javascript" src="js/url-handler.js "></script>
	<script type="text/javascript" src="js/init.js"></script>	
	<script src="js/prettify.js"></script>
	<script src="js/dropzone.js"></script>
	<script>
		var myDropzone=null;
		// Create the file:
		$file=((Cookies.get("imgviewer")!==undefined)?JSON.parse(Cookies.get("imgviewer")):{});
		$(function(){
			$("#rootwizard").bootstrapWizard({'tabClass': 'nav nav-tabs'});				
			if(Cookies.get('circle_top')===undefined || Cookies.get('circle_left')===undefined){
				Cookies.set('circle_top', "0px");
				Cookies.set('circle_left', "0px");
			}			
			$("#dvcircle")
			.css({"top": Cookies.get('circle_top'), "left": Cookies.get('circle_left')})
			.draggable({
				containment: "#dvviewport" ,				
				stop: function() {
					Cookies.set('circle_top', $(this).position().top+"px");
					Cookies.set('circle_left',$(this).position().left+"px");
				}
			});	
			// Prevent Dropzone from auto discovering this element:
			Dropzone.options.myAwesomeDropzone = false;
			// This is useful when you want to create the
			// Dropzone programmatically later
			// Disable auto discover for all elements:
			Dropzone.autoDiscover = false;
			//
			myDropzone = new Dropzone("#dropzone", {
		     url:'upload.php'			 
			,paramName: "file"// The name that will be used to transfer the file
			,dictDefaultMessage:"Click here or Just Drop Files to upload"
			//,maxFilesize: 1	  // MB	
			,maxFiles:1
			,uploadMultiple:false
			,acceptedFiles:"image/png,image/jpeg"
			,accept: function(file, done) {				
				if (file.name == "justinbieber.jpg") {
				  done("Naha, you don't.");
				}
				else 
				{ 
					done(); 
				}
			  }			
			});	
			//
			myDropzone.on("addedfile", function(file) {
				if(myDropzone.files.length>1)
				{
					myDropzone.removeFile(myDropzone.files[0]);
					++myDropzone.options.maxFiles;					
				}				
			});	
			myDropzone.on("complete", function(file) {			  
				$("#imgviewport").attr("src",file.dataURL)
				$("#sg-rightpull-container").height($("img").height());
				Cookies.set("imgviewer",JSON.stringify({
					url:"img/"+file.name,
					name:file.name,		
					size: file.size, 			
					type: file.type
				}));
			});	
			//
			if($file.url!==undefined)			
			{
				myDropzone.files.push($file);    // add to files array			
				myDropzone.emit("addedfile", $file);				
				convertFileToDataURLviaFileReader($file,function(base64Img)
				{			
					return myDropzone.createThumbnailFromUrl($file, 120, 120, "crop", true, function(dataUrl){
						myDropzone.emit("thumbnail", $file, dataUrl);
						myDropzone._processingThumbnail = false;
						myDropzone._processThumbnailQueue();
						myDropzone.emit("success", $file, "");
						// Update the maxFiles option
						--myDropzone.options.maxFiles;
						return myDropzone.emit("complete", $file);
					});		
				});									
			}
		});	
		function convertFileToDataURLviaFileReader($obj, callback) 
		{
			var xhr = new XMLHttpRequest();
			xhr.onload = function() 
			{
				var reader = new FileReader();			
				reader.onload = function () 
				{
					$obj.dataURL=this.result;
					callback(this.result);
				}								
				reader.readAsDataURL(xhr.response);
			};
			xhr.open('GET', $obj.url,true);
			xhr.responseType = 'blob';
			xhr.send();
		}
	</script>
  </body>
</html>