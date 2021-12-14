# Registerbusiness - Listmeon
where you can make listing of your business for SEO

## To make slug unique in database
```"ALTER TABLE `listmeon` ADD UNIQUE(`slug`);"```

## TO make a 2d array(array inside array) in mysql 
`(SELECT CONCAT("[", GROUP_CONCAT(listmeon_images.img_link), "]") AS categories From listmeon_images WHERE uid = listmeon.id)`

`SELECT *,(SELECT CONCAT("[", GROUP_CONCAT(listmeon_images.img_link), "]") AS categories From listmeon_images WHERE uid = listmeon.id)AS gallery FROM listmeon WHERE slug = 'web2rise'`

### with using json_array
`SELECT *,(SELECT json_array(GROUP_CONCAT(listmeon_images.img_link)) AS categories From listmeon_images WHERE uid = listmeon.id)AS gallery FROM listmeon WHERE slug = 'web2rise';`

wrong
SELECT *,(SELECT json_array(CONCAT("{", GROUP_CONCAT(listmeon_images.img_link), "}")) AS categories From listmeon_images WHERE uid = listmeon.id)AS gallery FROM listmeon WHERE slug ='web2rise';

## to make dynamic iframe in php
``$address = '1625 Hennepin Ave, Minneapolis, MN';
echo '<iframe frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $address)) . '&z=14&output=embed"></iframe>';``