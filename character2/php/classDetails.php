<?php

/*Assssin */

function getHitPoints($level, $conMod)
{
    $hitPoints = 0;
    
    for($i = 0; $i < $level; ++$i)
    {
        $levelHP = rand(1, 4);
        $levelHP += $conMod;

        if($levelHP < 2)
        {
            $levelHP = 2;
        }

        $hitPoints += $levelHP;

    }

    return $hitPoints;

}

function getAdvancedHitPoints($level, $conMod)
{
    $hitPoints = 0;

    for($i = 0; $i < $level; ++$i)
    {
        $levelHP = rand(3, 6);
        $levelHP += $conMod;

        if($levelHP < 3)
        {
            $levelHP = 3;
        }

        $hitPoints += $levelHP;

    }

    return $hitPoints;

}


function saveBreathAttack($level)
{
    if($level <= 4)
    {
        return 16;
    }
    else if($level >= 5 && $level <= 8)
    {
        return 14;
    }
    else if($level >= 9 && $level <= 12)
    {
        return 12;
    }
    else if($level >= 13 && $level <= 16)
    {
        return 10;
    }
    else
    {
        return 8;
    }

}


function savePoisonDeath($level)
{
    if($level <= 4)
    {
        return 14;
    }
    else if($level >= 5 && $level <= 8)
    {
        return 12;
    }
    else if($level >= 9 && $level <= 12)
    {
        return 10;
    }
    else if($level >= 13 && $level <= 16)
    {
        return 8;
    }
    else
    {
        return 6;
    }
}


function savePetrify($level)
{
    if($level <= 4)
    {
        return 13;
    }
    else if($level >= 5 && $level <= 8)
    {
        return 11;
    }
    else if($level >= 9 && $level <= 12)
    {
        return 9;
    }
    else if($level >= 13 && $level <= 16)
    {
        return 7;
    }
    else
    {
        return 5;
    }

}


function saveWands($level)
{
    if($level <= 4)
    {
        return 15;
    }
    else if($level >= 5 && $level <= 8)
    {
        return 13;
    }
    else if($level >= 9 && $level <= 12)
    {
        return 11;
    }
    else if($level >= 13 && $level <= 16)
    {
        return 9;
    }
    else
    {
        return 7;
    }

}


function saveSpells($level)
{
    if($level <= 4)
    {
        return 14;
    }
    else if($level >= 5 && $level <= 8)
    {
        return 12;
    }
    else if($level >= 9 && $level <= 12)
    {
        return 10;
    }
    else if($level >= 13 && $level <= 16)
    {
        return 8;
    }
    else
    {
        return 6;
    }

}

function primeReq($abilityScore)
{
    
    if($abilityScore >= 3 && $abilityScore <=5)
        {
            return "-10% Experience Point Adjustment (Prime Requisite)<br/>";
        }
    else if($abilityScore >= 6 && $abilityScore <=8)
        {
            return "-5% Experience Point Adjustment (Prime Requisite)<br/>";
        }
    else if($abilityScore >= 13 && $abilityScore <=15)
        {
            return "+5% Experience Point Adjustment (Prime Requisite)<br/>";
        }
    else if($abilityScore >= 16 && $abilityScore <=18)
        {
            return "+10% Experience Point Adjustment (Prime Requisite)<br/>";
        }
    else
        {
            return "";
        }
    
}

function secondAttack($level)
{
    if($level >= 15 && $level <= 18)
    {
        return "Fighter has 2 attacks per round.";
    }
    else if($level > 18)
    {
        return "Fighter has 3 attacks per round.";
    }
    else
    {
        return "";
    }

}


function strengthModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 to hit, damage & forcing doors";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 to hit, damage & forcing doors";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 to hit, damage & forcing doors";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 to hit, damage & forcing doors";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 to hit, damage & forcing doors";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 to hit, damage & forcing doors";
        }
    else if($abilityScore === 19)
        {
            $desc = "+3 to hit (+4 damage), damage & forcing doors";
        }
    
    return $desc;
}


function dexterityModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "+3 AC; -3 Missile Attack; -2 Optional Initiative";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "+2 AC; -2 Missile Attack; -1 Optional Initiative";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "+1 AC; -1 Missile Attack; -1 Optional Initiative";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "-1 AC; +1 Missile Attack; +1 Optional Initiative";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "-2 AC; +2 Missile Attack; +1 Optional Initiative";
        }
    else if($abilityScore === 18)
        {
            $desc = "-3 AC; +3 Missile Attack; +2 Optional Initiative";
        }   
    else if($abilityScore === 19)
        {
            $desc = "-4 AC; +3 Missile Attack; +2 Optional Initiative";
        }
    
    return $desc;
}

function constitutionModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 Hit Points per Hit Die; -2 Poison Save adj";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 Hit Points per Hit Die; -1 Poison Save adj";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 Hit Points per Hit Die";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Hit Points per Hit Die";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Hit Points per Hit Die";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Hit Points per Hit Die";
        }   
    else if($abilityScore === 19)
        {
            $desc = "+4 Hit Points per Hit Die; +1 Poison Save adj";
        }
    
    return $desc;
}


function intelligenceModifierDescription($abilityScore)
{
    $desc = "Able to read and write";
    
    if($abilityScore === 3)
        {
            $desc = "Unable to read or write; broken speech";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "Unable to read or write";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "Partial ability to write";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Languages; Able to read and write";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Languages; Able to read and write";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Languages; Able to read and write";
        }
    
    return $desc;
}


function wisdomModifierDescription($abilityScore)
{
    $desc = "";
    
    if($abilityScore === 3)
        {
            $desc = "-3 Saving Throw against all magical effects";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "-2 Saving Throw against all magical effects";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "-1 Saving Throw against all magical effects";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "+1 Saving Throw against all magical effects";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "+2 Saving Throw against all magical effects";
        }
    else if($abilityScore === 18)
        {
            $desc = "+3 Saving Throw against all magical effects";
        }   
    else if($abilityScore === 19)
    {
        $desc = "+4 Saving Throw against all magical effects";
    }
    
    return $desc;
}



function charismaModifierDescription($abilityScore)
{
    $desc = "+0 Reaction Ajustment; Max Retainers 4; Retainer Morale 7";
    
    if($abilityScore === 3)
        {
            $desc = "+2 Reaction Ajustment; Max Retainers 1; Retainer Morale 4";
        }
    else if($abilityScore >=4 && $abilityScore <=5)
        {
            $desc = "+1 Reaction Ajustment; Max Retainers 2; Retainer Morale 5";
        }
    else if($abilityScore >=6 && $abilityScore <=8)
        {
            $desc = "+1 Reaction Ajustment; Max Retainers 3; Retainer Morale 6";
        }
    else if($abilityScore >=13 && $abilityScore <=15)
        {
            $desc = "-1 Reaction Ajustment; Max Retainers 5; Retainer Morale 8";
        }
    else if($abilityScore >=16 && $abilityScore <=17)
        {
            $desc = "-1 Reaction Ajustment; Max Retainers 6; Retainer Morale 9";
        }
    else if($abilityScore === 18)
        {
            $desc = "-2 Reaction Ajustment; Max Retainers 7; Retainer Morale 10";
        }
    
    return $desc;
}

function getThaco($level, $abiltyMod)
{
    if($level == 1 || $level == 2 || $level == 3)
    {
        $thaco = 19;
    }
    else if($level == 4 || $level == 5)    
    {
        $thaco = 18;
    }
    else if($level == 6 || $level == 7 || $level == 8)    
    {
        $thaco = 17;
    }
    else if($level == 9 || $level == 10)    
    {
        $thaco = 16;
    }
    else if($level == 11)    
    {
        $thaco = 15;
    }
    else if($level == 12)    
    {
        $thaco = 14;
    }
    else if($level == 13 || $level == 14)    
    {
        $thaco = 13;
    }
    else if($level == 15 || $level == 16)    
    {
        $thaco = 12;
    }
    else if($level == 17 || $level == 18)    
    {
        $thaco = 11;
    }
    else
    {
        $thaco = 10;
    }

    $thaco -= $abiltyMod;

    return $thaco;
}


function getThacoCheck($score)
{
    if($score <= 2)
    {
        $score = 2;
    }

    return $score;
}

function startingAge($species)
{
    $age = 0;

    if($species == "Human")
    {
        $age += 18;
        $dieRoll = rand(1, 4);
        $age += $dieRoll;
    }

    if($species == "Dwarf")
    {
        $age += 75;
        $dieRoll = rand(1, 6);
        $dieRoll2= rand(1, 6);
        $dieRoll3 = rand(1, 6);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
    }

    if($species == "Elf")
    {
        $age += 100;
        $dieRoll = rand(1, 8);
        $dieRoll2= rand(1, 8);
        $dieRoll3 = rand(1, 8);
        $dieRoll4 = rand(1, 8);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
        $age += $dieRoll4;
    }

    if($species == "Gnome")
    {
        $age += 80;
        $dieRoll = rand(1, 6);
        $dieRoll2= rand(1, 6);
        $dieRoll3 = rand(1, 6);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
    }

    if($species == "Halfling")
    {
        $age += 40;
        $dieRoll = rand(1, 6);
        $age += $dieRoll;
    }

    if($species == "Half-Elf")
    {
        $age += 20;
        $dieRoll = rand(1, 4);
        $dieRoll2= rand(1, 4);
        $dieRoll3 = rand(1, 4);
        $dieRoll4= rand(1, 4);
        $dieRoll5 = rand(1, 4);
        $age += $dieRoll;
        $age += $dieRoll2;
        $age += $dieRoll3;
        $age += $dieRoll4;
        $age += $dieRoll5;
    }

    if($species == "Half-Orc")
    {
        $age += 18;
        $dieRoll = rand(1, 4);
        $age += $dieRoll;
    }

    return $age;

}


function assassinAbility($level)
{
    $message = "";
    
    if($level <= 2)
    {
        $message = "*Backstab: +4 bonus to hit; x2 damage.<br/>
        *Ability to use disguises and poisons.<br/>
        *Assassination (instant kill): Must successfully backstab and achieve surprise
        on the victim; base probability of 50% against a victim of equal level/HD
        (probability modified by 5% for each level/HD above or below assassin's level).<br/>";
    }
    else if($level == 3)
    {
        $message = "*Backstab: +4 bonus to hit; x2 damage.<br/>
        *Ability to use disguises and poisons.<br/>
        *Assassination (instant kill): Must successfully backstab and achieve surprise
        on the victim; base probability of 50% against a victim of equal level/HD
        (probability modified by 5% for each level/HD above or below assassin's level).<br/>
        *Gain thief skills at two levels lower.<br/>";
    }
    else if($level >= 4 && $level <= 7)
    {
        $message = "*Backstab: +4 bonus to hit; x2 damage.<br/>
        *Ability to use disguises and poisons.<br/>
        *Assassination (instant kill): Must successfully backstab and achieve surprise
        on the victim; base probability of 50% against a victim of equal level/HD
        (probability modified by 5% for each level/HD above or below assassin's level).<br/>
        *Gain thief skills at two levels lower.<br/>
        *May have hirelings (must be assassin of equal or lower levels).<br/>";
    }
    else if($level >= 8 && $level <= 11)
    {
        $message = "*Backstab: +4 bonus to hit; x2 damage.<br/>
        *Ability to use disguises and poisons.<br/>
        *Assassination (instant kill): Must successfully backstab and achieve surprise
        on the victim; base probability of 50% against a victim of equal level/HD
        (probability modified by 5% for each level/HD above or below assassin's level).<br/>
        *Gain thief skills at two levels lower.<br/>
        *May have hirelings (thief or assassin class only).<br/>";
    }
    else if($level > 11)
    {
        $message = "*Backstab: +4 bonus to hit; x2 damage.<br/>
        *Ability to use disguises and poisons.<br/>
        *Assassination (instant kill): Must successfully backstab and achieve surprise
        on the victim; base probability of 50% against a victim of equal level/HD
        (probability modified by 5% for each level/HD above or below assassin's level).<br/>
        *Gain thief skills at two levels lower.<br/>
        *May have hirelings (any class).<br/>";
    }
    
    return $message;
    
}

//Strength, Dexterity & Intelligence
function minAbilityScore($abilityScore)
{
    if($abilityScore < 12)
    {
        return 12;
    }
    else
    {
        return $abilityScore;
    }
}

?>