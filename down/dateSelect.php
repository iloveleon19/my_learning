<p>起始日期: 
    <select name="startYear">
        <?php
            for($i=date('Y');$i >= 1970;$i--){
                echo "<option value ='".$i."'>".$i."</option>";
            }
        ?>
    </select>年
    <select name="startMonth">
    <?php
        for($i=0; $i < 12; $i++){ //Unix 紀元 ( January 1 1970 00:00:00 GMT )
            echo "<option value ='".date('m', mktime(0,0,0,$i+2,0))."'>".date('m', mktime(0,0,0,$i+2,0,0))."</option>";
        }
    ?>
    </select>月
    <select name="startDay">
    <?php
        for($i=0; $i < 31; $i++){
            echo "<option value ='".date('d', mktime(0,0,0,1,$i+1,0))."'>".date('d', mktime(0,0,0,1,$i+1,0))."</option>";
        }
    ?>
    </select>日
</p>
<p>截止日期: 
    <select name="endYear">
    <?php
        for($i=date('Y');$i >= 1970;$i--){
            echo "<option value ='".$i."'>".$i."</option>";
        }
    ?>
    </select>年
    <select name="endMonth">
    <?php
        for($i=0; $i < 12; $i++){ //Unix 紀元 ( January 1 1970 00:00:00 GMT )
            echo "<option value ='".date('m', mktime(0,0,0,$i+2,0))."' ";
            if(date('m', mktime(0,0,0,$i+2,0)) == date('m')) {echo "selected";}
                echo ">".date('m', mktime(0,0,0,$i+2,0,0))."</option>";
            }
    ?>
    </select>月
    <select name="endDay">
    <?php
        for($i=0; $i < 31; $i++){
            echo "<option value ='".date('d', mktime(0,0,0,1,$i+1,0))."' ";
            if(date('d', mktime(0,0,0,1,$i+1,0)) == date('d')) {echo "selected";}
                echo ">".date('d', mktime(0,0,0,1,$i+1,0))."</option>";
            }
    ?>
    </select>日
</p>