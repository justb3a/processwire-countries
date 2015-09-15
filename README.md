# ProcessWire Continents and Countries

Displays countries and continents. 

## Example

```html
{% set countries = modules.get('ContinentsAndCountries').getByContinent('eu') %}
<select>
  {% for country in countries %}
    <option value="{{country.code}}" {% if address.country == country.code %}selected="selected"{% endif %}>
      {{country.name}}
    </option>
  {% endfor %}
</select>
```
