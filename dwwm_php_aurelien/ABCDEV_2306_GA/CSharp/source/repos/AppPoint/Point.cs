using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AppPoint
{
    public class Point
    {
        private double coord_x;
        private double coord_y;
        // Propriétés (mettre en dessous du constructeur)
        private double Coord_x { get => coord_x; set => coord_x = value; }

        private double Coord_y { get => coord_y; set => coord_y = value; }

        public Point() : this(0,0)
        {
        }

        public Point(double _coord_x, double _coord_y)
        {
            this.coord_x = _coord_x;
            this.coord_y = _coord_y;
        }

        public override string ToString()
        {
            string coordonnes = "L'abscisse du point vaut " + coord_x + " et l'ordonne vaut " + coord_y;
            return coordonnes;
        }

        public void Deplacer(double _modification_x, double _modification_y)
        {
           Coord_x += _modification_x;
           Coord_y += _modification_y;
        }
        public Point SymetrieX()
        {
           return new Point(-coord_x, coord_y);
        }

        public Point SymetrieY()
        {
            return new Point(coord_x, -coord_y);
        }

        public Point SymetrieOrigine()
        {
            return this.SymetrieX().SymetrieY();
        }
        public void Permuter()
        {
            (this.coord_x, this.coord_y) = (this.coord_y, this.coord_x);
        }

    }
}
