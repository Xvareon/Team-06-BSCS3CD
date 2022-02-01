<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script>
      CKEDITOR.replace( 'editor1' );
    </script>
    <style>
	<?php include 'style.css'; ?>
	</style>
</head>

<div class="container">
        <footer class="pt-5 mt-5">
          <div class="row">
            <div class="col-6">
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="<?php echo base_url('pages/help'); ?>"class="nav-link p-0 text-muted">Help Center</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="<?php echo base_url('pages/faqs'); ?>" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="<?php echo base_url('pages/about'); ?>" class="nav-link p-0 text-muted">About</a></li>
              </ul>
              </div>
      
            <div class="col-4 offset-2">
          <form id="newsletter" name="newsletter" method="post" action="<?php echo base_url();?>newsletter/index" onsubmit ='return validate()'>
         <table class="table">                                      
                    <h6>Subscribe to our newsletter!</h6>
                    <p>A monthly digest of what's new and exciting from us.</p>
                    <tr>
                      <td>
                        <input type="email" name="email" id="email" style="width:250px;height:36px;" placeholder="Email address" class="ps-2 display border border-secondary border-1 rounded rounded-1" required></input>
                        <button type = "submit" value="Submit" class="btn mb-2 text-white">Subscribe</button>
                      </td>
                  </tr>
                    </tbody>               
         </table>
          </form> 
                                     <div id="fade" class="black_overlay"></div>       
                      
        </div>  
     
          </div>
      
          <div class="d-flex justify-content-between mt-4 border-top">
            <p>&copy; 2021 CommHub, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
            </ul>
          </div>
        </footer>
      </div>
      
</body>
</html>