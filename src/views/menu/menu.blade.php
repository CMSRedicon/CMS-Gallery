      <li class="{{ $request->segment(1) == 'articles' ? 'active' : '' }}">
                <a href="{{ route('admin.articles.index') }}">
                    <i class="fa fa-newspaper-o"></i>
                    <span class="title">@lang('CMS_Gallery_lang::articles.articles')</span>
                </a>
            </li>          
