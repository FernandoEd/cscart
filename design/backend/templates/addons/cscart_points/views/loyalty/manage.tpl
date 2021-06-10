<table style="width:90%;height:90%;">
{foreach $items as $value}
      
      <tr style=" border: 1px solid black;">
          <th  style=" border-right: 5px solid black;"  > 
            <a style="color:black;font-size:16px;margin-bottom:30%;"ref="admin.php?dispatch=loyalty.update&id_user={$value.user_id}">{$value.firstname} {$value.lastname} ({$value.points})</a>
            
        </th>
            
       <th>         
        {if count($value.pontos) > 0 }
            
                {foreach $value.pontos as $points}
                    {$points.data} - {$points.points}
                    <br>      
                {/foreach}
            
        {/if}
        <form id="frm{$value.user_id}points" method="POST" action="admin.php?dispatch=loyalty.manage" class="hidden">
            <input type="hidden" name="user_id" value="{$value.user_id}"/>
           
            <input type="number" name="points"/>
            <input type="submit" value="OK"/> 
        </form>
</th>
            <th style=" border-left: 5px solid black;"><button style="height: 100%;width:100%;background:white;border:blanchedalmond" onclick="$('#frm{$value.user_id}points').toggle();">
                Insert Points
         </button>
         
            </th>
        

            </tr>                
            {/foreach}
   
    </table>