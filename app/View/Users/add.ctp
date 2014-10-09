

<div class="users form">
    <?php echo $this->Form->create('User');
    $states = statesList();
    ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('firstName');
        echo $this->Form->input('lastName');
        echo $this->Form->input('streetName');
        echo $this->Form->input('zipCode');
        echo $this->Form->input('state', array('options' => array($states)))
        /*echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));*/
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>


<?php

#UnitedStatesOfAmerica
# http://www.allembru.com/post/us-states-dropdown-list-php-function/12/

function statesList() {
$states = array('AL'=>"Alabama",
'AK'=>"Alaska",
'AZ'=>"Arizona",
'AR'=>"Arkansas",
'CA'=>"California",
'CO'=>"Colorado",
'CT'=>"Connecticut",
'DE'=>"Delaware",
'DC'=>"District Of Columbia",
'FL'=>"Florida",
'GA'=>"Georgia",
'HI'=>"Hawaii",
'ID'=>"Idaho",
'IL'=>"Illinois",
'IN'=>"Indiana",
'IA'=>"Iowa",
'KS'=>"Kansas",
'KY'=>"Kentucky",
'LA'=>"Louisiana",
'ME'=>"Maine",
'MD'=>"Maryland",
'MA'=>"Massachusetts",
'MI'=>"Michigan",
'MN'=>"Minnesota",
'MS'=>"Mississippi",
'MO'=>"Missouri",
'MT'=>"Montana",
'NE'=>"Nebraska",
'NV'=>"Nevada",
'NH'=>"New Hampshire",
'NJ'=>"New Jersey",
'NM'=>"New Mexico",
'NY'=>"New York",
'NC'=>"North Carolina",
'ND'=>"North Dakota",
'OH'=>"Ohio",
'OK'=>"Oklahoma",
'OR'=>"Oregon",
'PA'=>"Pennsylvania",
'RI'=>"Rhode Island",
'SC'=>"South Carolina",
'SD'=>"South Dakota",
'TN'=>"Tennessee",
'TX'=>"Texas",
'UT'=>"Utah",
'VT'=>"Vermont",
'VA'=>"Virginia",
'WA'=>"Washington",
'WV'=>"West Virginia",
'WI'=>"Wisconsin",
'WY'=>"Wyoming");
return $states;
}
?>
