namespace NombrePremier
{
    public class Program
    {
        static void Main(string[] args)
        {
            int nombre;
            string saisie;

            Console.WriteLine("Saisir un nombre");

            saisie = Console.ReadLine();
            nombre = int.Parse(saisie);

            Console.WriteLine("nombre " + nombre + " increment " + Nbpremier(nombre));

        }

        public static int Nbpremier(int nombre) {

            int i;
            int j = 0;

            if (nombre <= 1)
            {
                j++;
            }
            else
            {

                for (i = 2; i <= nombre - 1; i++)
                {
                    if (nombre % i == 0)
                    {
                        j++;

                    }
                }
            }

            return j;
        }
    }
}