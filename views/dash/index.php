<div id="dash-container-links">
    <?php
    foreach ($grupos as $grupo) {
        
    ?>
        <div id="link-grupo-box-<?php echo $grupo['id'];?>">
            <div class="link-header <?php echo $grupo['color'];?>"><?php echo $grupo['nombre'];?> 
                <i class="fas fa-plus-square icon-plus-header" onclick="showNewLink(<?php echo $grupo['id'];?>);"></i>
            </div>
            
            <div class="new-link-box" id="newLinkBox-<?php echo $grupo['id'];?>">

                <i class="fas fa-edit"></i>
                <input type="text" class="new_link_textbox" name="name" placeholder="name" id="newName-<?php echo $grupo['id'];?>" required>
                
                <i class="far fa-object-group"></i>
                <input type="text" class="new_link_textbox" name="subgrupo" placeholder="Subgrupo" id="newSubGrupo-<?php echo $grupo['id'];?>" required>
                
                <i class="fas fa-link"></i>
                <input type="text" class="new_link_textbox" name="link" placeholder="Link" id="newLink-<?php echo $grupo['id'];?>" required>
                
                <i class="far fa-save saveIcon" onclick="saveNewLink(<?php echo $grupo['id'];?>)"></i>
            </div>

            <?php foreach($links as $link) { ?>
                <?php if ($link['grupo'] == $grupo['id']) { ?>
                <div class="link-box">
                    <div class="line <?php echo $grupo['color'];?>"></div>
                    <div class="text">
                        <?php echo $link['name']; ?>
                    </div>
                    <div class="tag <?php echo $grupo['color'];?>"><?php echo $link['subgrupo']; ?></div>
                </div>
            <?php }} ?>
        </div>
    <?php } ?>
</div>