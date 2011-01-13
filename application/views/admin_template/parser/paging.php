<span class="nav">
<?php
	// Render the "First" link
	if  ($cur_page > ($num_links + 1))
	{
		if($function)
			echo '<a class="first" title="First Page" href="javascript:'.$function.'(\''.sprintf($base_url, '0').'\')"><span>First</span></a>';
        else
			echo '<a class="first" title="First Page" href="'.sprintf($base_url, '0').'"><span>First</span></a>';
	}
	// Render the "Previous" link
	if  ($cur_page != 1)
	{
		$i = $uri_page_number - $per_page;
		if ($i == 0) $i = '0';
		if($function)
			echo '<a class="previous" title="previous page" href="javascript:'.$function.'(\''.sprintf($base_url, $i).'\')"><span>Previous</span></a>';
        else
			echo '<a class="previous" title="previous page" href="'.sprintf($base_url, $i).'"><span>Previous</span></a>';
	}
?>
</span>
<span class="pages">
<?php
	// Write the digit links
	for ($loop = $start -1; $loop <= $end; $loop++)
	{
		$i = ($loop * $per_page) - $per_page;
					
		if ($i >= 0)
		{
			if ($cur_page == $loop)
			{
				echo '<a href="#" title="Page '.$loop.'" class="active"><span>'.$loop.'</span></a>'; // Current page
			}
			else
			{
				$n = ($i == 0) ? '0' : $i;
                if($function)
    				echo '<a title="Page '.$loop.'" href="javascript:'.$function.'(\''.sprintf($base_url, $n).'\')"><span>'.$loop.'</span></a>';
                else
                    echo '<a title="Page '.$loop.'" href="'.sprintf($base_url, $n).'"><span>'.$loop.'</span></a>';
			}
		}
	}
?>
</span>
<span class="nav">
<?php
	// Render the "Next" link
	if ($cur_page < $num_pages)
	{
		if($function)
        	echo '<a class="next" title="Next Page" href="javascript:'.$function.'(\''.sprintf($base_url, ($cur_page * $per_page)).'\')"><span>Next</span></a>';
        else
            echo '<a class="next" title="Next Page" href="'.sprintf($base_url, ($cur_page * $per_page)).'"><span>Next</span></a>';
	}
	// Render the "Last" link
	if (($cur_page + $num_links) < $num_pages)
	{
		$i = (($num_pages * $per_page) - $per_page);
        if($function)
	        echo '<a class="last" title="Last Page" href="javascript:'.$function.'(\''.sprintf($base_url, $i).'\')"><span>Last</span></a>';
        else
            echo '<a class="last" title="Last Page" href="'.sprintf($base_url, $i).'"><span>Last</span></a>';
	}
?>
</span>


