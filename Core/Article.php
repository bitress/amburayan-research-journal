<?php

class Article
{

    private Database $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getArticle($article_id)
    {


    }

    public function fetchArticles()
    {

        try {
            $sql = "SELECT * FROM articles INNER JOIN journals ON journals.journal_id = articles.journal_id";
            $stmt = $this->db->prepare($sql);
            if ($stmt->execute()) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
       } catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }

    }


    public function fetchJournalIssues()
    {

        $sql = "SELECT * FROM journal INNER JOIN issues ON issues.journal_id = issues.journal_id";
        $stmt = $this->db->prepare($sql);
        if ($stmt->execute())   {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }

      public function fetchJournalYear()
    {

        $sql = "SELECT * FROM journal INNER JOIN issues ON issues.journal_id = issues.journal_id GROUP BY issues.issue_year ORDER BY issues.issue_year DESC";
        $stmt = $this->db->prepare($sql);
        if ($stmt->execute())   {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }




}