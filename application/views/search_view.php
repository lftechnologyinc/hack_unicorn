<script src="<?php echo base_url('assets');?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets');?>/js/jquery-ui-1.8.22.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets');?>/js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>
<link href="<?php echo base_url('assets');?>/css/jquery-ui-1.8.22.custom.css" rel="stylesheet">
<div>
    <form id="search" method ="post" action ="<?php echo base_url('search/result')?>">
        <label>From </label>
      <select name ="from">
          <?php foreach ($place as $eachPlace): ?>
          <option value="<?php echo $eachPlace->idplaces; ?>"><?php echo $eachPlace->name?></option>
          <?php endforeach;?>
       </select>
    </br>
    <label> To </label>
        <select name="destination">
            <?php foreach ($place as $eachPlace) : ?>
              <option value="<?php echo $eachPlace->idplaces;  ?>"><?php echo $eachPlace->name ?></option>
          <?php endforeach; ?>
       </select>
    </br>
    <input type="text" name="date" value="" id ="date" />
    </br>
    <input type="submit" name="submit" value="Search" id ="search" />
    </form>
</div>
<script>
    $(document).ready(function() {

    });
</script>
