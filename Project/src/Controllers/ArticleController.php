<?php
namespace Controllers;

use Models\Comments\Comment;
use View\View;
use Services\Db;
use Models\Articles\Article;
use Models\Users\User;

class ArticleController
{

    private $view;
    private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../templates');
        $this->db = Db::getInstance();
    }

    public function show(int $id)
    {
        $users = User::findAll();
        $article = Article::getById($id);
        $comments = Comment::findAllWhere('article_id', $id);
        if (!$article) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }
        $this->view->renderHtml('article/show.php', ['article' => $article, 'comments' => $comments, 'users' => $users]);

    }


    public function edit(int $id)
    {
        $article = Article::getById($id);
        // $article->setAuthorId()->setNickname('alena');
        // $article->getAuthorId()->setNickname('Alena');
        // $article->setAuthorNickname('Alena');
        // $article->save();

        $this->view->renderHtml('article/edit.php', ['article' => $article]);
    }
    public function create()
    {
        $users = User::findAll();
        $this->view->renderHtml('article/create.php', ['users' => $users]);
    }
    public function store()
    {
        $user = User::getById($_POST['authorId']);
        $article = new Article();
        $article->setAuthorId($user);
        $article->setTitle($_POST['title']);
        $article->setText($_POST['text']);
        $article->save();
    }

    public function update(int $id)
    {
        $article = Article::getById($id);
        $article->setTitle($_POST['title']);
        $article->setText($_POST['text']);
        $user = User::getById($_POST['author_id']); /////
        $article->setAuthorId($user);
        $article->save();
        $this->show($id);

    }

    public function delete(int $id)
    {
        $article = Article::getById($id);
        $article->destroy();
    }

    // public function comments(int $id)
    // {
    //     $article = Article::getById($id);
    //     $article->getId()->setCommentText($_POST['text']);
    //     $article->save();
    //     $this->show($id);
    // }
}

