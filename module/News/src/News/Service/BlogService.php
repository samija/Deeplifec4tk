<?php

namespace News\Service;

use News\Entity\Post;

interface BlogService
{
    /**
     * Saves a news post
     *
     * @param post $post
     *
     * @return Post
     */
    public function save(Post $post);

    /**
     * @param $page int
     *
     * @return \Zend\Paginator\Paginator
     */
    public function fetch($page);

    /**
     * @param $categorySlug string
     * @param $postSlug string
     *
     * @return Post|null
     */
    public function find($categorySlug, $postSlug);

    /**
     * @param $postId int
     *
     * @return Post|null
     */
    public function findById($postId);

    /**
     * @param Post $post
     *
     * @return void
     */
    public function update(Post $post);

    /**
     * @param $postId int
     *
     * @return void
     */
    public function delete($postId);
} 