<?php
function estudiantelegend($platzi_rank)
{
  if ($platzi_rank>=3000) {
    echo "Eres un estudiante mayor\n";
  }
  else{
    echo "No eres estudiante\n";
  }
}
estudiantelegend(30000);
echo "\n";