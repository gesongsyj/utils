<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="html5,jquery,ui,widgets,ajax,ria,web framekwork,web development,easy,easyui,datagrid,treegrid,tree">
		<meta name="description" content="jQuery EasyUI is a complete framework for HTML5 web page. It provides easy to use components for building modern, interactive, javascript applications that work on pc and mobile devices.">
		<title>panel - Documentation - jQuery EasyUI</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../../prettify/prettify.css">
		<script type="text/javascript" src="../../prettify/prettify.js"></script>
		<script type="text/javascript" src="/easyui/jquery-1.8.0.min.js"></script>
		<script type="text/javascript">
			$(function(){
								$('textarea[name="code-panel"]').each(function(){
					var data = $(this).val();
					data = data.replace(/(\r\n|\r|\n)/g, '\n');
					if (data.indexOf('\t') == 0){
						data = data.replace(/^\t/, '');
						data = data.replace(/\n\t/g, '\n');
					}
					data = data.replace(/\t/g, '    ');
					var pre = $('<pre name="code" class="prettyprint linenums"></pre>').insertAfter(this);
					pre.text(data);
					$(this).remove();
				});
				prettyPrint();
			});
		</script>
	</head>
	<body>
		<div id="header">
						<div id="header-inner">
				<table cellpadding="0" cellspacing="0" style="width:100%;">
					<tr>
						<td rowspan="2" style="width:20px;">
						</td>
						<td style="height:52px;">
							<div style="color:#fff;font-size:22px;font-weight:bold;">
								<a href="/index.php" style="color:#fff;font-size:22px;font-weight:bold;text-decoration:none">jQuery EasyUI</a>
							</div>
							<div style="color:#fff">
								<a href="/index.php" style="color:#fff;text-decoration:none">easyui helps you build your web pages easily!</a>
							</div>
						</td>
						<td style="padding-right:5px;text-align:right;vertical-align:bottom;">
							<div id="topmenu">
								<a href="/index.php">Home</a>
								<a href="/demo/main/index.php">Demo</a>
								<a href="/tutorial/index.php">Tutorial</a>
								<a href="/documentation/index.php">Documentation</a>
								<a href="/download/index.php">Download</a>
								<a href="/extension/index.php">Extension</a>
								<a href="/contact.php">Contact</a>
								<a href="/forum/index.php">Forum</a>
							</div>
						</td>
					</tr>
				</table>
			</div>
			
		</div>
		<div id="mainwrap">
			<div id="content">
			

<div style="padding:10px">

<h3>Panel</h3>
<p>Override defaults with $.fn.panel.defaults.</p>
<p>
The panel is used as a container for other contents. 
It is the base component for building other components such as layout, tabs, accordion, etc.
It also provides built-in collapsible, closable, maximizable and minimizable behavior and other customized behavior.
Panels can be easily embedded into any position of web page.
</p>
<img src="images/panel.png"/>

<h4>Usage Example</h4>

<h5>Create Panel</h5>
<p>1. Create Panel via markup</p>
<p>Creation from markup is even easier. Add 'easyui-panel' class to &lt;div/&gt; markup.</p>
<textarea name="code-panel" class="html">
<div id="p" class="easyui-panel" title="My Panel" 
		style="width:500px;height:150px;padding:10px;background:#fafafa;"
		data-options="iconCls:'icon-save',closable:true,
				collapsible:true,minimizable:true,maximizable:true">
	<p>panel content.</p>
	<p>panel content.</p>
</div>
</textarea>

<p>2. Create Panel programatically</p>
<p>Let's create panel with tools on top right.</p>
<textarea name="code-panel" class="js">
<div id="p" style="padding:10px;">
    <p>panel content.</p>
    <p>panel content.</p>
</div>
 
$('#p').panel({
    width:500,
    height:150,
    title:'My Panel',
    tools:[{
        iconCls:'icon-add',
        handler:function(){alert('new')}
    },{
        iconCls:'icon-save',
        handler:function(){alert('save')}
    }]
}); 
</textarea>

<h5>Move Panel</h5>
<p>Call 'move' method to move panel to a new position</p>
<textarea name="code-panel" class="js">
$('#p').panel('move',{
    left:100,
    top:100
});	
</textarea>

<h5>Load Content</h5>
<p>Let's load the panel content via ajax and show some message when loaded successfully.</p>
<textarea name="code-panel" class="js">
$('#p').panel({
    href:'content_url.php',
    onLoad:function(){
        alert('loaded successfully');
    }
});
</textarea>

<h4>Properties</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Type</strong></th>
<th><strong>Description</strong></th>

<th><strong>Default</strong></th>
</tr>
<tr>
<td>id</td>
<td>string</td>
<td>The id attribute of this panel.</td>
<td>null</td>
</tr>
<tr>
<td>title</td>
<td>string</td>
<td>The title text to display in panel header.</td>
<td>null</td>
</tr>
<tr>
<td>iconCls</td>
<td>string</td>

<td>A CSS class to display a 16x16 icon in panel.</td>
<td>null</td>
</tr>
<tr>
<td>width</td>
<td>number</td>
<td>Set the panel width.</td>
<td>auto</td>
</tr>
<tr>
<td>height</td>

<td>number</td>
<td>Set the panel height.</td>
<td>auto</td>
</tr>
<tr>
<td>left</td>
<td>number</td>
<td>Set the panel left position.</td>
<td>null</td>
</tr>

<tr>
<td>top</td>
<td>number</td>
<td>Set the panel top position.</td>
<td>null</td>
</tr>
<tr>
<td>cls</td>
<td>string</td>
<td>Add a CSS class to the panel.</td>

<td>null</td>
</tr>
<tr>
<td>headerCls</td>
<td>string</td>
<td>Add a CSS class to the panel header.</td>
<td>null</td>
</tr>
<tr>
<td>bodyCls</td>
<td>string</td>

<td>Add a CSS class to the panel body.</td>
<td>null</td>
</tr>
<tr>
<td>style</td>
<td>object</td>
<td>
Add a custom specification style to the panel.
<p>Code example to change the panel border width:</p>
<pre style="color:#006600">
&lt;div class="easyui-panel" style="width:200px;height:100px"
		data-options="style:{borderWidth:2}"&gt;
&lt;/div&gt;
</pre>
</td>
<td>{}</td>
</tr>
<tr>
<td>fit</td>

<td>boolean</td>
<td>
When true to set the panel size fit it's parent container.
The example below shows a panel which can be auto resized to max inner dimensions of its parent container
<pre style="color:#006600">
&lt;div style="width:200px;height:100px;padding:5px"&gt;
	&lt;div class="easyui-panel" style="width:200px;height:100px"
			data-options="fit:true,border:false"&gt;
		Embedded Panel
	&lt;/div&gt;
&lt;/div&gt;
</pre>
</td>
<td>false</td>
</tr>
<tr>
<td>border</td>
<td>boolean</td>
<td>Defines if to show panel border.</td>
<td>true</td>
</tr>

<tr>
<td>doSize</td>
<td>boolean</td>
<td>If set to true,the panel will be resize and do layout when created.</td>
<td>true</td>
</tr>
<tr>
<td>noheader</td>
<td>boolean</td>
<td>If set to true, the panel header will not be created.</td>

<td>false</td>
</tr>
<tr>
<td>content</td>
<td>string</td>
<td>The panel body content.</td>
<td>null</td>
</tr>
<tr>
<td>collapsible</td>
<td>boolean</td>

<td>Defines if to show collapsible button.</td>
<td>false</td>
</tr>
<tr>
<td>minimizable</td>
<td>boolean</td>
<td>Defines if to show minimizable button.</td>
<td>false</td>
</tr>
<tr>
<td>maximizable</td>

<td>boolean</td>
<td>Defines if to show maximizable button.</td>
<td>false</td>
</tr>
<tr>
<td>closable</td>
<td>boolean</td>
<td>Defines if to show closable button.</td>
<td>false</td>
</tr>

<tr>
<td>tools</td>
<td>array,selector</td>
<td>
Custom tools, possible values:<br/>
1) an array, each element contains iconCls and handler properties. <br/>
2) a selector that indicating the tools<br/>
<p>The panel tools can be declared with exists &lt;div&gt; tag:</p>
<pre>
&lt;div class="easyui-panel" style="width:300px;height:200px"
		title="My Panel" data-options="iconCls:'icon-ok',tools:'#tt'"&gt;
&lt;/div&gt;
&lt;div id="tt"&gt;
	&lt;a href="#" class="icon-add" onclick="javascript:alert('add')"&gt;&lt;/a&gt;
	&lt;a href="#" class="icon-edit" onclick="javascript:alert('edit')"&gt;&lt;/a&gt;
&lt;/div&gt;
</pre>
<p>The panel tools can also be defined via array:</p>
<pre>
&lt;div class="easyui-panel" style="width:300px;height:200px"
		title="My Panel" data-options="iconCls:'icon-ok',tools:[
				{
					iconCls:'icon-add',
					handler:function(){alert('add')}
				},{
					iconCls:'icon-edit',
					handler:function(){alert('edit')}
				}]"&gt;
&lt;/div&gt;
</pre>
</td>
<td>[]</td>
</tr>
<tr>
<td>collapsed</td>
<td>boolean</td>
<td>Defines if the panel is collapsed at initialization.</td>

<td>false</td>
</tr>
<tr>
<td>minimized</td>
<td>boolean</td>
<td>Defines if the panel is minimized at initialization.</td>
<td>false</td>
</tr>
<tr>
<td>maximized</td>
<td>boolean</td>

<td>Defines if the panel is maximized at initialization.</td>
<td>false</td>
</tr>
<tr>
<td>closed</td>
<td>boolean</td>
<td>Defines if the panel is closed at initialization.</td>
<td>false</td>
</tr>
<tr>
<td>href</td>

<td>string</td>
<td>
A URL to load remote data and then display in the panel.
Notice that the content will not be loaded until the panel is open and expand.
This is useful to create a lazy loading panel:
<pre>
&lt;div id="pp" class="easyui-panel" style="width:300px;height:200px"
		data-options="href='get_content.php',closed:true"&gt;
&lt;/div&gt;
&lt;a href="#" onclick="javascript:$('#pp').panel('open')"&gt;Open&lt;/a&gt;
</pre>
</td>
<td>null</td>
</tr>
<tr>
<td>cache</td>
<td>boolean</td>
<td>True to cache the panel content that loaded from href.</td>
<td>true</td>
</tr>

<tr>
<td>loadingMessage</td>
<td>string</td>
<td>When loading remote data show a message in the panel.</td>
<td>Loading…</td>
</tr>
<tr>
<td>extractor</td>
<td>function</td>
<td>
Defines how to extract the content from ajax response, return extracted data.
<pre>
extractor: function(data){
	var pattern = /&lt;body[^>]*>((.|[\n\r])*)<\/body>/im;
	var matches = pattern.exec(data);
	if (matches){
		return matches[1];	// only extract body content
	} else {
		return data;
	}
}
</pre>
</td>
<td></td>
</tr>
</table>

<h4>Events</h4>
<table class="doc-table">
<tr>
<th><strong>Name</strong></th>
<th><strong>Parameters</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>onLoad</td>
<td>none</td>
<td>Fires when remote data is loaded.</td>

</tr>
<tr>
<td>onBeforeOpen</td>
<td>none</td>
<td>Fires before panel is opened, return false to stop the open.</td>
</tr>
<tr>
<td>onOpen</td>
<td>none</td>
<td>Fires after panel is opened.</td>
</tr>

<tr>
<td>onBeforeClose</td>
<td>none</td>
<td>
Fires before panel is closed, return false to cancel the close.
The panel declared below cannot be closed.
<pre>
&lt;div class="easyui-panel" style="width:300px;height:200px;"
		title="My Panel" data-options="onBeforeClose:function(){return false}"&gt;
	The panel cannot be closed.
&lt;/div&gt;
</pre>
</td>
</tr>
<tr>
<td>onClose</td>
<td>none</td>
<td>Fires after panel is closed.</td>
</tr>
<tr>

<td>onBeforeDestroy</td>
<td>none</td>
<td>Fires before panel is destroyed, return false to cancel the destroy.</td>
</tr>
<tr>
<td>onDestroy</td>
<td>none</td>
<td>Fires after panel is destroyed.</td>
</tr>
<tr>
<td>onBeforeCollapse</td>

<td>none</td>
<td>Fires before panel is collapsed, return false to stop the collapse.</td>
</tr>
<tr>
<td>onCollapse</td>
<td>none</td>
<td>Fires after panel is collpased.</td>
</tr>
<tr>
<td>onBeforeExpand</td>
<td>none</td>

<td>Fires before panel is expanded, return false to stop the expand.</td>
</tr>
<tr>
<td>onExpand</td>
<td>none</td>
<td>Fires after panel is expanded.</td>
</tr>
<tr>
<td>onResize</td>
<td>width, height</td>
<td>Fires after panel is resized.<br />

width: the new outer width<br />
height: the new outer height</td>
</tr>
<tr>
<td>onMove</td>
<td>left,top</td>
<td>Fires after panel is moved.<br />
left: the new left postion<br />
top: the new top position</td>
</tr>

<tr>
<td>onMaximize</td>
<td>none</td>
<td>Fires after the window has been maximized.</td>
</tr>
<tr>
<td>onRestore</td>
<td>none</td>
<td>Fires after the window has been restored to its original size.</td>
</tr>
<tr>

<td>onMinimize</td>
<td>none</td>
<td>Fires after the window has been minimized.</td>
</tr>
</table>

<h4>Methods</h4>
<table class="doc-table">

<tr>
<th><strong>Name</strong></th>
<th><strong>Parameter</strong></th>
<th><strong>Description</strong></th>
</tr>
<tr>
<td>options</td>
<td>none</td>
<td>Return options property.</td>
</tr>
<tr>

<td>panel</td>
<td>none</td>
<td>Return the outer panel object.</td>
</tr>
<tr>
<td>header</td>
<td>none</td>
<td>Return the panel header object.</td>
</tr>
<tr>
<td>body</td>

<td>none</td>
<td>Return the panel body object.</td>
</tr>
<tr>
<td>setTitle</td>
<td>title</td>
<td>Set the title text of header.</td>
</tr>
<tr>
<td>open</td>
<td>forceOpen</td>

<td>When forceOpen parameter set to true, the panel is opened bypass the onBeforeOpen callback.</td>
</tr>
<tr>
<td>close</td>
<td>forceClose</td>
<td>When forceClose parameter set to true, the panel is closed bypass the onBeforeClose callback.</td>
</tr>
<tr>
<td>destroy</td>
<td>forceDestroy</td>
<td>When forceDestroy parameter set to true, the panel is destroyed bypass the onBeforeDestroy callback.</td>

</tr>
<tr>
<td>refresh</td>
<td>href</td>
<td>
Refresh the panel to load remote data.
If the 'href' parameter is assigned, it will override the old 'href' property.
<p>Code example:</p>
<pre>
// open a panel and then refresh its contents.
$('#pp').panel('open').panel('refresh');
// refresh contents with a new URL.
$('#pp').panel('open').panel('refresh','new_content.php');
</pre>
</td>
</tr>
<tr>
<td>resize</td>
<td>options</td>
<td>Set panel size and do layout. The options object contains following properties:<br />
width: the new panel width<br />
height: the new panel height<br />
left: the new panel left position<br />
top: the new panel top position
<p>Code example:</p>
<pre>
$('#pp').panel('resize',{
	width: 600,
	height: 400
});
</pre>
</td>
</tr>
<tr>
<td>move</td>
<td>options</td>
<td>Move the panel to a new position. The options object contains following properties:<br />
left: the new panel left position<br />
top: the new panel top position</td>

</tr>
<tr>
<td>maximize</td>
<td>none</td>
<td>Fits the panel winthin its container.</td>
</tr>
<tr>
<td>minimize</td>
<td>none</td>
<td>Minimizing the panel.</td>
</tr>

<tr>
<td>restore</td>
<td>none</td>
<td>Restores the maximized panel back to its original size and position.</td>
</tr>
<tr>
<td>collapse</td>
<td>animate</td>
<td>Collapses the panel body.</td>
</tr>
<tr>

<td>expand</td>
<td>animate</td>
<td>Expand the panel body.</td>
</tr>
</table>

</div>

﻿			</div>
		</div>
		<div id="footer">
			<div>Copyright © 2010-2013 www.jeasyui.com</div>
		</div>
	</body>
</html>