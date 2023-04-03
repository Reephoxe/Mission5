<?php

namespace App\Controller\Admin;


use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\Film;
use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class CommentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comment::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        
        return [
            IntegerField::new('id')->hideOnForm(),
            TextField::new('comment'),
            AssociationField::new('film'),
           // IntegerField::new('filmId'),
        ];
    }   
}
