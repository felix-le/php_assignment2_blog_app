# Scenario

Create a blog with spread role of users.

- Public pages:

* Show page title on the Nav bar
  > A page table: page_id, page_link, page_title,
  <!-- > A page_user: page_id(fk - foreign key), user_id(fk - foreign key) -->
* Show posts on each page:
  <!-- > A img table: img_id, img, img_alt; -->
  > A post table: post_id, post_content,
  <!-- img_id(fk - foreign key); -->
  > A post_page table: post_id(fk - foreign key), page_id(fk - foreign key);
* Login page
  > A user table: user_id, email, password, username
* register page

* Show logo:
  > A logo table: img_id

- Private pages:

* profile page
  > A img table: img_id, img, img_alt;
  > A use_img table: user_id, img_id, post_id
