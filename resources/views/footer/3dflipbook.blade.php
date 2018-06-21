<!--<script src="js/jquery2.min.js"></script>-->
<script src="{{ url('/') }}/js/bootstrap2.min.js"></script>
<script src="{{ url('/') }}/js/html2canvas.min.js"></script>
<script src="{{ url('/') }}/js/three.min.js"></script>
<script src="{{ url('/') }}/js/pdf.min.js"></script>

<script src="{{ url('/') }}/js/3dflipbook.min.js"></script>

<script type="text/javascript">

$(function() {
  <?php $sess=Session::get('lang');
        $current = url()->current();
        $link=url('/');
        if((($sess)&&(strpos($current, url('/').'/fr/') !== false))||(($sess)&&(strpos($current, url('/').'/en/') !== false))||((strpos($current, url('/').'/fr/') !== false))||((strpos($current, url('/').'/en/') !== false)))
        $link=url('/storage/downloads/'.Lang::locale().'/');
        else $link=url('/storage/downloads/fr/');
        ?>
  <?php $downloads = App\Download::all()->sortByDesc('id')->translate(config('global.lang_trans')); 
foreach($downloads as $download){
  $book=$download->s_name;
  $pdf=$download->pdf;
  ?>
	//replicate
	function {{$book}}(n) {
    return {
      type: 'image',
      src: '{{ $link}}/{{$book}}/'+(n+1)+'.jpg',
      interactive: false
    };
  }
<?php }?>
	//end replicate
	
  var booksOptions = {
    <?php
    foreach($downloads as $download){
  $book=$download->s_name;
  $n_pages=$download->n_pages;
  ?>
	  //replicate
	  {{$book}}: {
      pageCallback: {{$book}},
      pages: {{$n_pages}},
      propertiesCallback: function(props) {
        props.cover.color = 0x000000;
        return props;
      },
		controlsProps: {
    downloadURL: '',
      actions: {
        cmdBackward: {
          code: 37,
        },
        cmdForward: {
          code: 39
        },
        cmdSave: {
          code: 68,
          flags: 1,
        }
      }
			},
      template: {
        html: '{{ url('/') }}/templates/default-book-view.html',
        styles: [
          '{{ url('/') }}/css/font-awesome.min.css',
          '{{ url('/') }}/css/short-white-book-view.css'
        ],
        script: '{{ url('/') }}/js/default-book-view.js',
        sounds: {
          startFlip: '{{ url('/') }}/sounds/start-flip.mp3',
          endFlip: '{{ url('/') }}/sounds/end-flip.mp3'
        }
      },
      styleClb: function() {
        $('.fb3d-modal').removeClass('light').addClass('dark');
      }
    },
	  //end replicate
  <?php } ?>
  };
 

  var instance = {
    scene: undefined,
    options: undefined,
    node: $('.fb3d-modal .mount-container')
  };

  var modal = $('.fb3d-modal');
    modal.on('fb3d.modal.hide', function() {
      instance.scene.dispose();
    });
    modal.on('fb3d.modal.show', function() {
      instance.scene = instance.node.FlipBook(instance.options);
      instance.options.styleClb();
    });
    $('.books').find('img').click(function(e) {
      if(e.target.id) {
        instance.options = booksOptions[e.target.id];
        $('.fb3d-modal').fb3dModal('show');
      }
    });
  });

  $('#modalView').on('shown.bs.modal', function() {
     $(this).find('.modal-dialog').css({
        width: ($(this).find('.modal-body').find('*').width()+60)+'px',
        opacity: 1
     });
  });
  $('#modalView').on('hidden.bs.modal', function() {
     $(this).find('.modal-dialog').css({
        opacity: 0
     });
  });

  $('.image-preview .pbtn').click(function(e) {
    var target = e.target;
    while(target && !$(target).hasClass('wrap')) {
      target = target.parentNode;
    }

    var view = $('#modalView'), body = view.find('.modal-body'), footer = view.find('.modal-footer');
    body.html($('<img style="width: '+$(target).css('width')+'; height: '+$(target).css('height')+';" src="images/'+e.target.id+'.gif">'));
    footer.html($(e.target).attr('data'));
    view.modal('show');
  });

  $('.img-link').click(function(e) {
    e.preventDefault();
    $($(e.target).attr('href')).trigger('click');
  });
</script>
      </div>
      
    </div>
    <script src="{{ url('/') }}/js/script.js"></script>
