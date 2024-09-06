<?php

function palindrone($s){
	for(i=0;i<=strlen($s);i++){
		for(j=strlen($s);j>=0;i--){
			return substr($s,i,1)=== substr($s,j,1);
		}
	}
}
echo palindrone("run");
			
?>