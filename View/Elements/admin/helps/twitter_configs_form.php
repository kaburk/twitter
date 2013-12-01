	<p>Twitterプラグインでは次の二つの機能を提供しています。</p>
	<ul>
		<li>任意のユーザーのTwitterユーザータイムラインを任意の場所に表示</li>
		<li>ブログ記事編集画面へのTwitter投稿フォームの表示</li>
	</ul>
	<h5>Twitter認証</h5>
	<p>baserCMSからTwitterプラグインの機能を利用するには、baserCMSがあなたのTwitterアカウントにアクセスできるように認証を行う必要があります。
	<br />まず、サイドメニューの「Twitterアプリ認証」をクリックします。
	Twitterの認証画面が表示されますので、「許可する」をクリックします。その後、この画面に戻ってきます。
	<h5>ブログ記事の編集画面からTwitterの投稿を行うには</h5>
	<p>Twitter認証完了後、下のフォームの「ブログ記事」にチェックを入れて保存すると完了です。ブログの記事編集画面にTwitterへの投稿フォームが表示されます。<br />
	別のアカウントに対して投稿を行うには、再度、サブメニューの「Twitterアプリ認証」をクリックします。次の画面でログインしなおして「許可する」ボタンをクリックして下さい。</p>
	<h5>Twitterタイムラインを表示するには</h5>
	<p>Twitterのユーザー名と表示件数を下のフォームに入力します。その後、<?php $this->BcBaser->link('ウィジェットエリア管理',array('plugin'=>null,'controller'=>'widget_areas','action'=>'index')) ?>より「Twitterユーザータイムライン」を選択します。</p>
	
	