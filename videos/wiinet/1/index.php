<head>
	<link rel="stylesheet" type="text/css" href="../../../data/css/videos.css"/>
</head>
<body>
        <div style="text-align:center;">
			<div style="width:100%;background-color:#000;">
            <object type="application/x-shockwave-flash" data="../../resources/player.swf" width="384" height="256">
                <param name="wmode" value="transparent">
                <param name="allowFullScreen" value="false">
                <param name='flashvars' value='filename=Doger.net-1.flv'>
            </object>
			</div>
            <h1>Doger.net is available now!</h1>
            <div style="font-size:20px;"><?php class pageView { private $file = 'views.txt'; public function add_view() { $prev_count = file_get_contents($this->file); file_put_contents($this->file, $prev_count+1); } public function get_view() { $count = file_get_contents($this->file); return $count; } } $view = new pageView; $view->add_view(); echo $view->get_view().' views'; ?> - 
			Feb 7, 2023
			</div>
        </div>
        <table>
            <tr>
                <td> 
                    <a href="../"><img src="../pfp.jpg" style="max-width:100px;"></a>
                </td>
                <td>
                    <a href="../">Doger.net</a>
				</td>
				<td style="padding-left:20px;">
					<h2>Description</h2>
					Try out Doger.net at Doger.net.xyz
				</td>
            </tr>
            </table>
    </body>
</html>
