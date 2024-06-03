<x-layout>
  <x-slot:carts>{{ $countCarts }}</x-slot:carts>
    {{-- <section class="blog_area single-post-area section-padding"> --}}
        <div class="container">
         <div class="row justify-content-center">
          <div class="col-lg-5 posts-list align-self-center">
           <div class="single-post">
           
             <img class="img-fluid shadow p-3 mb-5 bg-white rounded" src="/assets/img/gallery/arrival1.png" alt="" style="width: 80%">
           
           </div>
          </div>
         
          
            <div class="col-lg-7">
              <div class="blog_right_sidebar">
                <div class="blog_details">
                  <h2 style="color: #2d2d2d;">{{ $product->name }}
                 </h2>
                 <ul class="blog-info-link mt-3 mb-4">
                   <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                   <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                 </ul>
                 <p class="excert">
                   {{ $product->description }}
                 </p>
               </div>
              <aside class="single_sidebar_widget search_widget shadow p-3 mb-5 bg-white rounded">
                <h2 style="color: #2d2d2d;">Rp. {{ number_format($product->price) }},-
                </h2>
                <p class="excert">
                  Tersedia : {{ $product->stock }}
                </p>
                <form action="/cart" method="POST">
                  @csrf
                  <input type="hidden" name="id_product" value="{{ $product->id }}">
                <div class="form-group">
                  <div class="input-group mb-3">
                  <input type="text" class="form-control" name="quantity"  placeholder='Jumlah'
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                    <button class="btns" type="submit"><i class="ti-shopping-cart"></i></button>
                  </div>
                  <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn "
      type="submit">Masukan Keranjang</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    {{-- </section> --}}
</x-layout>