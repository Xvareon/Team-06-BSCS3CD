<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
	<?php include 'style.css'; ?>
</style>
</head>
<body>
  <div class="container pt-5 mt-5 mb-5">

<p> ********* </p>
    <!-- ADD POST
<?php include ('create.php'); ?>
   -->
    <!-- User id to name -->
    <div class="d-flex flex-row ">
    <h3 class="pt-5  "><?= $title1 ?></h3>
    <h3 class="pt-5 ms-auto text-decoration-none ">
      <a href="<?php echo base_url('posts/create'); ?>" class="btn btn-custom" type="button" id="create"> Add Post</a> 
    </h3>
    </div>
<?php foreach($posts as $post) : ?>
  <?php
        $id = $post['by'];
        $query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
        $post['name'] = $query->row()->{'name'};
  ?>
        <!-- End -->
  <div class="container pt-3 border bg-white border-none mt-3">
  <dl class="row ps-3">
    <!-- href to profile -->

<!-- <dt class="col-sm-1 my-auto"><a href="#"  id="username"> <?php echo $post['name']; ?> </a></dt> 

    <dd class="col-sm-9 text-muted my-auto " id="date"><?php echo $post['date']; ?></dd>
-->
<div class="d-flex flex-wrap ">
    <img src="<?php echo base_url('assets/avatar.png' ); ?>" width= "60" >
    <div class=" ps-2 row">
      <dt id="username"> <?php echo $post['name']; ?></dt> 
      <dd class=" text-muted " id="date"><small> <?php echo $post['date']; ?></small></dd>
    </div>
</div>


  <a id="title" href="<?php echo site_url('/posts/'. $post['slug']); ?>" class="link-secondary">
  
  
    <h4 class="display py-2" ><?php echo $post['title']; ?></h4></a>
  
  
    <p class="lead d-inline-block text-truncate" id="description" style="max-width: 700px;"><?php echo $post['content']; ?></p>
    <div class="d-flex ">
      <div class="p-2">
    <img class="display py-2 ms-2 me-1" src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/hand-thumbs-up.svg'); ?>"><?php echo $post['upvote']; ?>
    </div>
    <div class="p-2">
    <img class="display py-2 me-1"  src="<?php echo base_url('assets/node_modules/bootstrap-icons/icons/hand-thumbs-down.svg');?>"><?php echo $post['downvote']; ?>
</div>
    </div>
    </div>
   
    <?php endforeach ; ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

