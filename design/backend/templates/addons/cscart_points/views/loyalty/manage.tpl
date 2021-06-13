<table style="width:90%;height:90%;margin-left: auto;margin-right: auto;margin-top:2%; margin-bottom:2%">
{foreach $items as $value}
      
      <tr style=" border: 1px solid black;">
          <th  style=" border-right: 5px solid black;"  > 
            <p style="color:black;font-size:16px;"ref="admin.php?dispatch=loyalty.update&id_user={$value.user_id}">{$value.firstname} {$value.lastname} ({$value.points})</p>
            
        </th>
            
       <th>         
        {if count($value.pontos) > 0 }
            
                {foreach $value.pontos as $points}
                <a  style="color:black;font-size:14px;" onclick="$('#frm{$value.user_id}deletepoints').toggle();">
                    {$points.data} - {$points.points}
                    
                </a>
                    <br>      
                {/foreach}
            
        {/if}

      


         <form id="frm{$value.user_id}points" method="POST" action="admin.php?dispatch=loyalty.manage" class="hidden">
            <input type="hidden" name="user_id"  value="{$value.user_id}"/>
           
            <input type="number" name="points"/>
    
              <input class="btn" id="contactSubmit" name ="contactSubmit"
            type="submit" value="ok">
        </form>   

         <form id="frm{$value.user_id}deletepoints" method="POST" action="admin.php?dispatch=loyalty.manage" class="hidden">   
              
            <input  id="user" name = "user" type="hidden" value="{$value.user_id}">
         
              <input class="btn" id="submitEmail" name ="submitEmail"
            type="submit" value="ok">
        </form>      
      
       

</th>
            <th style=" border-left: 5px solid black;">
            <button  style="height: 100%;width:100%;background:white;border:black" onclick="$('#frm{$value.user_id}points').toggle();">
                Insert Points
         </button>

      </th>
      
</tr>                
            {/foreach}
   
    </table>

    




    

    