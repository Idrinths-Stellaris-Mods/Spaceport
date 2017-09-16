<?php
$content = "namespace = idrinthexpandedspaceport\n";
$modules = "";
for ( $i=7;$i<35;$i++ ) {
    $a=str_pad($i,2,"0",STR_PAD_LEFT);
    $set = floor($i/7)-1;
    $slot = floor($i/7)*7;
    $weaponid = floor($i/7)."_".($i%7);
    
    $lI = $i < 14?$i+1:$i%7+1;
    
    $ship_weapon_range_mult = $lI*0.01+0.1;
    $ship_tracking_add = 2*$lI+1;
    $ship_accuracy_add = 1;
    $ship_weapon_damage = $lI*0.1;
    $ship_fire_rate_mult = $lI*0.01;
    
    $ship_hitpoints_add = 500*$lI;
    $ship_auto_repair_add = $lI/5000;
    $ship_shield_hp_add = $lI*10;
    $ship_shield_regen_add = $lI/100;
    $ship_armor_add = 5*$lI;

    $spaceport_ship_build_speed_mult = 0.2 * $lI;
    $spaceport_ship_build_cost_mult = -0.005 * $lI;
    if($i<14) {//defaults for levels 1-6
        $ship_weapon_range_mult -= 0.01;
        $ship_tracking_add -= 2;
        $ship_weapon_damage += 0.9;
        $ship_fire_rate_mult += 1.99;

        $ship_hitpoints_add -= 500;
        $ship_armor_add += 70;

        $spaceport_ship_build_speed_mult -= 0.2;
        $spaceport_ship_build_cost_mult += 0.005;
    }
$modules .= "\nidrinthexpandedspaceport_projectile_weapon$weaponid = {
    icon = \"GFX_spaceport_modules\"
    icon_frame = 1
    initial = no
    replaceable = no
    section = \"CORE_SPACEPORT_SECTION\"
    component_set = \"SPACEPORT_MASS_DRIVER\"
    prerequisites = { tech_idrinthexpandedspaceport_defense_blocker }
    spaceport_level = 1
    required_resources = {
        energy = 1
    }
    station_modifier = {
        ship_weapon_range_mult = $ship_weapon_range_mult
        ship_tracking_add = $ship_tracking_add
        ship_accuracy_add = $ship_accuracy_add
        ship_weapon_damage = $ship_weapon_damage
        ship_fire_rate_mult =  $ship_fire_rate_mult

        ship_hitpoints_add = $ship_hitpoints_add
        ship_auto_repair_add = $ship_auto_repair_add
        ship_shield_hp_add = $ship_shield_hp_add
        ship_shield_regen_add = $ship_shield_regen_add
        ship_armor_add = $ship_armor_add
    }
    modifier = {
        spaceport_ship_build_speed_mult = $spaceport_ship_build_speed_mult
        spaceport_ship_build_cost_mult = $spaceport_ship_build_cost_mult
    }
}

idrinthexpandedspaceport_laser_weapon$weaponid = {
    icon = \"GFX_spaceport_modules\"
    icon_frame = 2
    initial = no
    replaceable = no
    section = \"CORE_SPACEPORT_SECTION\"
    component_set = \"SPACEPORT_LASER\"
    prerequisites = { tech_idrinthexpandedspaceport_defense_blocker }
    spaceport_level = 1
    required_resources = {
        energy = 1
    }
    station_modifier = {
        ship_weapon_range_mult = $ship_weapon_range_mult
        ship_tracking_add = $ship_tracking_add
        ship_accuracy_add = $ship_accuracy_add
        ship_weapon_damage = $ship_weapon_damage
        ship_fire_rate_mult =  $ship_fire_rate_mult

        ship_hitpoints_add = $ship_hitpoints_add
        ship_auto_repair_add = $ship_auto_repair_add
        ship_shield_hp_add = $ship_shield_hp_add
        ship_shield_regen_add = $ship_shield_regen_add
        ship_armor_add = $ship_armor_add
    }
    modifier = {
        spaceport_ship_build_speed_mult = $spaceport_ship_build_speed_mult
        spaceport_ship_build_cost_mult = $spaceport_ship_build_cost_mult
    }
}

idrinthexpandedspaceport_missile_weapon$weaponid = {
    icon = \"GFX_spaceport_modules\"
    icon_frame = 3
    initial = no
    replaceable = no
    section = \"CORE_SPACEPORT_SECTION\"
    component_set = \"SPACEPORT_MISSILE\"
    prerequisites = { tech_idrinthexpandedspaceport_defense_blocker }
    spaceport_level = 1
    required_resources = {
        energy = 1
    }
    station_modifier = {
        ship_weapon_range_mult = $ship_weapon_range_mult
        ship_tracking_add = $ship_tracking_add
        ship_accuracy_add = $ship_accuracy_add
        ship_weapon_damage = $ship_weapon_damage
        ship_fire_rate_mult =  $ship_fire_rate_mult

        ship_hitpoints_add = $ship_hitpoints_add
        ship_auto_repair_add = $ship_auto_repair_add
        ship_shield_hp_add = $ship_shield_hp_add
        ship_shield_regen_add = $ship_shield_regen_add
        ship_armor_add = $ship_armor_add
    }
    modifier = {
        spaceport_ship_build_speed_mult = $spaceport_ship_build_speed_mult
        spaceport_ship_build_cost_mult = $spaceport_ship_build_cost_mult
    }
}

idrinthexpandedspaceport_swarm_weapon$weaponid = {
    icon = \"GFX_spaceport_modules\"
    icon_frame = 3
    initial = no
    replaceable = no
    section = \"CORE_SPACEPORT_SECTION\"
    component_set = \"SPACEPORT_SCOURGE_MISSILE\"
    prerequisites = { tech_idrinthexpandedspaceport_defense_blocker }
    spaceport_level = 1
    required_resources = {
        energy = 1
    }
    station_modifier = {
        ship_weapon_range_mult = $ship_weapon_range_mult
        ship_tracking_add = $ship_tracking_add
        ship_accuracy_add = $ship_accuracy_add
        ship_weapon_damage = $ship_weapon_damage
        ship_fire_rate_mult =  $ship_fire_rate_mult

        ship_hitpoints_add = $ship_hitpoints_add
        ship_auto_repair_add = $ship_auto_repair_add
        ship_shield_hp_add = $ship_shield_hp_add
        ship_shield_regen_add = $ship_shield_regen_add
        ship_armor_add = $ship_armor_add
    }
    modifier = {
        spaceport_ship_build_speed_mult = $spaceport_ship_build_speed_mult
        spaceport_ship_build_cost_mult = $spaceport_ship_build_cost_mult
    }
}

idrinthexpandedspaceport_fallen_empire_weapon$weaponid = {
    icon = \"GFX_spaceport_modules\"
    icon_frame = 3
    initial = no
    replaceable = no
    section = \"CORE_SPACEPORT_SECTION\"
    component_set = \"FALLEN_EMPIRE_SPACEPORT_LANCE\"
    prerequisites = { tech_idrinthexpandedspaceport_defense_blocker }
    spaceport_level = 1
    required_resources = {
        energy = 1
    }
    station_modifier = {
        ship_weapon_range_mult = $ship_weapon_range_mult
        ship_tracking_add = $ship_tracking_add
        ship_accuracy_add = $ship_accuracy_add
        ship_weapon_damage = $ship_weapon_damage
        ship_fire_rate_mult =  $ship_fire_rate_mult

        ship_hitpoints_add = $ship_hitpoints_add
        ship_auto_repair_add = $ship_auto_repair_add
        ship_shield_hp_add = $ship_shield_hp_add
        ship_shield_regen_add = $ship_shield_regen_add
        ship_armor_add = $ship_armor_add
    }
    modifier = {
        spaceport_ship_build_speed_mult = $spaceport_ship_build_speed_mult
        spaceport_ship_build_cost_mult = $spaceport_ship_build_cost_mult
    }
}";
$content.="\n
planet_event = {
    id = idrinthexpandedspaceport.10$a
    hide_window = yes

    trigger = {
        has_spaceport = yes
        is_spaceport_module_slot_free = $i
        NOR = {\n";
for($c=$i%7;$c<7;$c++) {
    $wid = floor($i/7)."_".$c;
    $content .= "
            has_spaceport_module = idrinthexpandedspaceport_projectile_weapon$wid
            has_spaceport_module = idrinthexpandedspaceport_laser_weapon$wid
            has_spaceport_module = idrinthexpandedspaceport_missile_weapon$wid
            has_spaceport_module = idrinthexpandedspaceport_swarm_weapon$wid
            has_spaceport_module = idrinthexpandedspaceport_fallen_empire_weapon$wid\n";
}
$content.= "       }
    }

    immediate = {
        if = {
            limit = { has_spaceport_module = projectile_weapon }
            SET_SPACEPORT_MODULE = {
                module = idrinthexpandedspaceport_projectile_weapon$weaponid 
                slot = $slot
            }
        }
        if = {
            limit = { has_spaceport_module = laser_weapon }
            SET_SPACEPORT_MODULE = {
                module = idrinthexpandedspaceport_laser_weapon$weaponid 
                slot = $slot
            }
        }
        if = {
            limit = { has_spaceport_module = missile_weapon }
            SET_SPACEPORT_MODULE = {
                module = idrinthexpandedspaceport_missile_weapon$weaponid 
                slot = $slot
            }
        }
        if = {
            limit = { has_spaceport_module = swarm_weapon }
            SET_SPACEPORT_MODULE = {
                module = idrinthexpandedspaceport_swarm_weapon$weaponid 
                slot = $slot
            }
        }
        if = {
            limit = { has_spaceport_module = fallen_empire_weapon }
            SET_SPACEPORT_MODULE = {
                module = idrinthexpandedspaceport_fallen_empire_weapon$weaponid 
                slot = $slot
            }
        }
    }
}";
}
file_put_contents(__DIR__."/events/01_idrinth-expanded-spaceport.txt",$content);
file_put_contents(__DIR__."/common/spaceport_modules/03_idrinth-expanded-spaceport.txt",$modules);