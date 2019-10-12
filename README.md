# WARNING: This repository is no longer maintained :warning:

> This repository will not be updated. The repository will be kept available in read-only mode.

# ProcessWire Continents and Countries

Displays countries and continents and their iso codes.

The "value" for each country is the two-letter country code. 

As an added bonus, the country names are displayed in the language of the user (sorted by name ASC) if the appropriate translation was added.

![Example Frontend](https://github.com/justonestep/processwire-countries/blob/master/screens/example.jpg)

## Fieldtype

This module adds a Fieldtype: **Select Options Countries**.

**Field settings**:

![Example Field Settings](https://github.com/justonestep/processwire-countries/blob/master/screens/fieldtype.jpg)

## Example

**PHP**

```php
<?php $countries = $modules->get('ContinentsAndCountries')->findByContinent('eu'); ?>

<select>
  <?php foreach ($countries as $country): ?>
    <option value="<?=$country->code; ?>">
      <?=$country->name; ?>
    </option>
  <?php endforeach; ?>
</select>

```


## Translations

To translate the continents and countries, you must have the ProcessWire Language Support module installed. This is included with ProcessWire, so all you have to do is click to Modules > Language > Language Support > install.

Once you have Language Support installed, you have to add or edit the desired language by going to Setup > Languages > Add New Language. Enter a title and name for the language and save.

Next, you can add the file for the language (have a look at site/modules/ContinentsAndCountries/translations/ if the translation for your language exists) or translate it manually.


## Available Methods

* getContinents()
* getCountries()
* getByContinent($continent)
    * $continent has to be one of **af, as, eu, na, sa, oc, an**
    * (Africa, Asia, Europe, North America, South America, Oceania, Antarctica)
* findBy($table = 'countries', $select = array(), $options = array())
  * for example: ``findBy('countries', array('name', 'iso'), array(id => 2))``
  * returns: 

    ```php
      array (size=1)
        0 => object(stdClass)[1059]
            public 'name' => string 'Åland-Inseln' (length=13)
            public 'iso' => string 'ALA' (length=3)
    ```
