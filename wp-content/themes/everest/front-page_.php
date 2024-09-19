UPDATE wp_options SET option_value = replace(option_value, 'http://', 'https://') WHERE option_name = 'home' OR option_name = 'siteurl';
UPDATE wp_posts SET guid = replace(guid, 'http://', 'https://');
UPDATE wp_posts SET post_content = replace(post_content, 'http://', 'https://');
UPDATE wp_postmeta SET meta_value = replace(meta_value,'http://', 'https://');






UPDATE wp_options SET option_value = replace(option_value, 'http://localhost:8888/agili', 'https://everestdesign.com.br/agili') WHERE option_name = 'home' OR option_name = 'siteurl';
UPDATE wp_posts SET guid = replace(guid, 'http://localhost:8888/agili', 'https://everestdesign.com.br/agili');
UPDATE wp_posts SET post_content = replace(post_content, 'http://localhost:8888/agili', 'https://everestdesign.com.br/agili');
UPDATE wp_postmeta SET meta_value = replace(meta_value,'http://localhost:8888/agili', 'https://everestdesign.com.br/agili');